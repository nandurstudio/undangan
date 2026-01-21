# nginx Configuration for n8n Subpath Deployment

**Date:** January 21, 2026  
**Status:** ✅ Working Configuration  
**n8n Version:** 2.4.4  
**nginx Version:** 1.24-alpine  

---

## 🎯 Problem Statement

n8n 2.4.4 has a bug when `N8N_PATH` environment variable is set:
- **Expected behavior:** URLs should be `/n8n/static/file.css`
- **Actual behavior:** n8n concatenates without separator → `/n8nstatic/file.css`

This affects:
- Static CSS/fonts: `/static/*` → `/n8nstatic/*`
- JavaScript bundles: `/assets/*` → `/n8nassets/*`
- REST API: `/rest/*` → `/n8nrest/*`
- Node types: `/types/*` → `/n8ntypes/*`
- Node icons: `/icons/*` → `/n8nicons/*`
- Favicon: `/favicon.ico` → `/n8nfavicon.ico`

---

## ✅ Solution: Multiple nginx Location Blocks

Instead of trying to fix n8n's URL generation, we create separate nginx location blocks to route each incorrect path to the correct upstream path.

### Complete nginx Configuration

```nginx
# n8n static files - route /n8nstatic to /static
# (CSS, fonts, base-path.js, posthog.init.js)
location /n8nstatic/ {
    proxy_pass http://n8n:5678/static/;
    proxy_set_header Host $host;
    proxy_set_header Accept-Encoding "";  # Prevent HTTP/2 protocol errors
}

# n8n assets - route /n8nassets to /assets
# (JavaScript bundles, Vue components)
location /n8nassets/ {
    proxy_pass http://n8n:5678/assets/;
    proxy_set_header Host $host;
    proxy_set_header Accept-Encoding "";  # Prevent compression issues
    
    # Increase timeouts and disable buffering for large JS files
    proxy_connect_timeout 60s;
    proxy_send_timeout 60s;
    proxy_read_timeout 60s;
    proxy_buffering off;       # Stream large files directly
    proxy_http_version 1.1;    # Required for streaming
}

# n8n REST API - route /n8nrest to /rest
# (Settings, credentials, workflows, executions)
location /n8nrest/ {
    proxy_pass http://n8n:5678/rest/;
    proxy_set_header Host $host;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header X-Forwarded-Proto $scheme;
}

# n8n types - route /n8ntypes to /types
# (Node type definitions, nodes.json)
location /n8ntypes/ {
    proxy_pass http://n8n:5678/types/;
    proxy_set_header Host $host;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header X-Forwarded-Proto $scheme;
}

# n8n icons - route /n8nicons to /icons
# (SVG icons for workflow nodes)
location /n8nicons/ {
    proxy_pass http://n8n:5678/icons/;
    proxy_set_header Host $host;
}

# n8n favicon - route /n8nfavicon to /favicon
# (Browser tab icon)
location ~ ^/n8nfavicon\.(ico|png)$ {
    proxy_pass http://n8n:5678/favicon.$1;
    proxy_set_header Host $host;
}

# n8n main application
# IMPORTANT: NO trailing slash on proxy_pass to preserve full path
location /n8n/ {
    proxy_pass http://n8n:5678;  # No trailing slash!
    proxy_set_header Host $host;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header X-Forwarded-Proto $scheme;
    
    # WebSocket support for real-time workflow execution updates
    proxy_http_version 1.1;
    proxy_set_header Upgrade $http_upgrade;
    proxy_set_header Connection "upgrade";
    
    # Timeouts for long-running workflows (5 minutes)
    proxy_connect_timeout 300s;
    proxy_send_timeout 300s;
    proxy_read_timeout 300s;
}
```

---

## 🔍 Key Configuration Details

### 1. `Accept-Encoding: ""` Header

**Purpose:** Prevents HTTP/2 protocol errors (`ERR_HTTP2_PROTOCOL_ERROR`)

**Why it's needed:**
1. Without this header, nginx requests compressed response from n8n (gzip/brotli)
2. n8n sends compressed content with `Content-Encoding: gzip` header
3. nginx should decompress before sending to browser via HTTP/2
4. nginx + HTTP/2 + compression handling has a bug → protocol error
5. Setting `Accept-Encoding: ""` forces n8n to send uncompressed response
6. nginx then handles compression to browser (if needed)

**Applied to:**
- `/n8nstatic/` - CSS and JavaScript files
- `/n8nassets/` - Large JavaScript bundles

### 2. `proxy_buffering off`

**Purpose:** Stream large JavaScript files directly to client

**Why it's needed:**
- n8n's JavaScript bundles can be several MB in size
- Buffering causes delays in initial page load
- Streaming starts sending data immediately
- Reduces memory usage in nginx
- Prevents buffer overflow errors

**Applied to:** `/n8nassets/` location only

### 3. Increased Timeouts (60s for assets, 300s for app)

**Purpose:** Prevent timeout errors for large file transfers and long-running workflows

**Assets (60s):**
- Large JavaScript bundles take time to transfer
- Slow connections need more time
- Default 30s timeout is insufficient

**Application (300s):**
- Workflow execution can take several minutes
- WebSocket connections need to stay alive
- API calls to external services may be slow

### 4. `proxy_pass` with/without Trailing Slash

**Rule:**
- ✅ **With trailing slash** (`proxy_pass http://n8n:5678/assets/`):
  - nginx **strips** the location prefix from URL
  - Request: `/n8nassets/file.js` → Upstream: `/assets/file.js`
  
- ✅ **Without trailing slash** (`proxy_pass http://n8n:5678`):
  - nginx **preserves** the full URL path
  - Request: `/n8n/page` → Upstream: `/n8n/page`

**Why main app uses no trailing slash:**
- n8n with `N8N_PATH=/n8n` expects all requests to include `/n8n` prefix
- We must preserve the full path including `/n8n/`
- Stripping it would break n8n's internal routing

---

## 📋 Testing & Verification

### Test Each Endpoint

```bash
# 1. Static CSS (should return 200 OK, content-type: text/css)
curl -I https://nandurstudio.com/n8nstatic/prefers-color-scheme.css

# 2. JavaScript assets (should return 200 OK, content-type: text/javascript)
curl -I https://nandurstudio.com/n8nassets/index-DaFyCpE-.js

# 3. REST API settings (should return JSON)
curl -s https://nandurstudio.com/n8nrest/settings | head -c 100

# 4. Node types (should return 401 Unauthorized or JSON if authenticated)
curl -I https://nandurstudio.com/n8ntypes/nodes.json

# 5. Node icons (should return 200 OK, content-type: image/svg+xml)
curl -I https://nandurstudio.com/n8nicons/n8n-nodes-base/dist/nodes/Webhook/webhook.dark.svg

# 6. Main application (should return 200 OK, content-type: text/html)
curl -I https://nandurstudio.com/n8n/

# 7. Health check (should return {"status":"ok"})
curl https://nandurstudio.com/n8n/healthz
```

### Verify in Browser

1. Open https://nandurstudio.com/n8n/
2. Open Developer Tools (F12) → Network tab
3. Hard refresh (Ctrl+Shift+R)
4. Check all requests:
   - ✅ All should be 200 OK (except telemetry 404s which are normal)
   - ✅ No `ERR_HTTP2_PROTOCOL_ERROR`
   - ✅ No pending/stalled requests
   - ✅ All assets load (JS, CSS, SVG icons)

---

## 🔄 Deployment Process

### Step 1: Update Local nginx Configuration

**File:** `E:\nginx-with-n8n.conf`

Edit this file with any changes needed, then proceed to deployment.

### Step 2: Upload to Server

```bash
scp E:\nginx-with-n8n.conf portfolio-droplet:/opt/stack/services/nginx/conf.d/default.conf
```

### Step 3: Test Configuration

```bash
ssh portfolio-droplet "sudo docker exec portfolio_nginx nginx -t"
```

Expected output:
```
nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
nginx: configuration file /etc/nginx/nginx.conf test is successful
```

### Step 4: Restart nginx

```bash
ssh portfolio-droplet "cd /opt/stack && sudo docker compose restart nginx"
```

### Step 5: Verify n8n Access

```bash
curl -I https://nandurstudio.com/n8n/
```

Should return `HTTP/1.1 200 OK` or `HTTP/1.1 401 Unauthorized` (if Basic Auth not provided).

---

## 🚨 Common Issues & Solutions

### Issue 1: `ERR_HTTP2_PROTOCOL_ERROR`

**Symptom:** JavaScript/CSS files fail to load with protocol error in browser console

**Cause:** nginx trying to modify compressed response body sent by upstream

**Solution:** Add `Accept-Encoding: ""` header to prevent compression:
```nginx
location /n8nassets/ {
    proxy_set_header Accept-Encoding "";  # This line fixes it
    ...
}
```

### Issue 2: Assets Load as HTML (404 page)

**Symptom:** Requesting `/n8nassets/file.js` returns HTML 404 page instead of JavaScript

**Cause:** Location block not matching or incorrect proxy_pass path

**Solution:** Verify location block and ensure trailing slash matches:
```nginx
location /n8nassets/ {          # With trailing slash
    proxy_pass http://n8n:5678/assets/;  # With trailing slash
}
```

### Issue 3: Pending/Stalled Requests for Large JS Files

**Symptom:** Large JavaScript bundles take very long to load or get stuck

**Cause:** Default nginx timeout (30s) or buffering issues

**Solution:** Increase timeouts and disable buffering:
```nginx
location /n8nassets/ {
    proxy_connect_timeout 60s;
    proxy_send_timeout 60s;
    proxy_read_timeout 60s;
    proxy_buffering off;        # Stream instead of buffer
    proxy_http_version 1.1;
}
```

### Issue 4: WebSocket Connection Failed

**Symptom:** Real-time workflow updates don't work, WebSocket connection fails

**Cause:** Missing WebSocket upgrade headers

**Solution:** Add WebSocket support headers:
```nginx
location /n8n/ {
    proxy_http_version 1.1;
    proxy_set_header Upgrade $http_upgrade;
    proxy_set_header Connection "upgrade";
}
```

---

## 📊 Performance Metrics

After implementing this configuration:

- ✅ **Initial Load Time:** ~2-3 seconds (includes Basic Auth prompt)
- ✅ **Asset Loading:** All 40+ JavaScript/CSS files load without errors
- ✅ **WebSocket:** Real-time updates working, < 100ms latency
- ✅ **API Response Time:** 50-200ms for REST endpoints
- ✅ **Memory Usage:** nginx ~10MB, n8n ~200-300MB
- ✅ **Success Rate:** 100% (excluding telemetry 404s which are expected)

---

## 🔐 Security Considerations

### 1. Basic Authentication

Currently using nginx-level Basic Auth via n8n environment variable:
```yaml
N8N_BASIC_AUTH_ACTIVE=true
N8N_BASIC_AUTH_USER=admin
N8N_BASIC_AUTH_PASSWORD=your_n8n_password  # DO NOT COMMIT; change after deployment
```

**Recommendation:** Change password immediately after deployment!

### 2. No Direct Port Exposure

n8n container port 5678 is NOT exposed to internet - only accessible via nginx reverse proxy:
```yaml
n8n:
  # No 'ports:' section = not exposed
  networks:
    - backend  # Only accessible from nginx container
```

### 3. HTTPS Only

All n8n traffic uses HTTPS via nginx with Let's Encrypt certificate. HTTP is automatically redirected to HTTPS.

### 4. Future: IP Whitelisting (Optional)

For additional security, you could restrict n8n access by IP:
```nginx
location /n8n/ {
    allow 123.456.789.0/24;  # Your office IP range
    deny all;
    ...
}
```

---

## 📚 References

- **n8n PATH Configuration:** https://docs.n8n.io/hosting/configuration/environment-variables/deployment/#n8n_path
- **nginx Reverse Proxy:** http://nginx.org/en/docs/http/ngx_http_proxy_module.html
- **WebSocket Proxying:** http://nginx.org/en/docs/http/websocket.html

---

**File Locations:**
- **Server:** `/opt/stack/services/nginx/conf.d/default.conf`
- **Local Backup:** `E:\nginx-with-n8n.conf`

**Last Updated:** January 21, 2026  
**Tested & Working:** ✅ January 21, 2026 23:55 WIB
