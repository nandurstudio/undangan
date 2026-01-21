# Portfolio Deployment Status - DigitalOcean Docker Stack

**Deployment Date:** January 21, 2026  
**Last Updated:** January 21, 2026 - 23:55 WIB  
**Domain:** https://nandurstudio.com  
**Server:** DigitalOcean Droplet (Ubuntu 24.04, 2GB RAM, 1vCPU, Singapore Region)

---

## ✅ Completed Infrastructure

### 1. **Static Portfolio Website** 
- **Status:** ✅ LIVE & WORKING
- **URL:** https://nandurstudio.com
- **Technology:** HTML5, CSS3, JavaScript, Bootstrap 4
- **Features:**
  - HTTPS enabled (Let's Encrypt SSL)
  - HTTP/2 support
  - Security headers (HSTS, X-Frame-Options, X-Content-Type-Options)
  - All assets loading correctly (images, CSS, JavaScript)

### 2. **Flask API Service**
- **Status:** ✅ LIVE & WORKING
- **Base URL:** https://nandurstudio.com/flask/
- **Technology:** Python 3.12, Flask, Gunicorn
- **Endpoints:**
  - `GET /flask/` → `{"status": "success", "message": "Flask API is running", "version": "1.0.0"}`
  - `GET /flask/health` → `{"status": "healthy"}`
- **Docker Container:** `portfolio_flask` (healthy)

### 3. **Laravel Backend API**
- **Status:** ✅ PARTIALLY WORKING
- **Base URL:** https://nandurstudio.com/api/
- **Technology:** Laravel 10, PHP 8.3-FPM
- **Working Endpoints:**
  - `GET /api/test` → Returns JSON with request info ✅
  - `POST /api/test` → Accepts POST requests and returns data ✅
- **Issue:**
  - `POST /api/messages` → Returns 302 redirect (MessageController validation issue)
- **Database:** ✅ MySQL 8.0 connected and working
  - Database: `portfolio`
  - User: `portfolio_user`
  - Test insert successful

### 4. **Database (MySQL)**
- **Status:** ✅ WORKING
- **Container:** `portfolio_db` (healthy)
- **Database:** portfolio
- **Tables:** users, messages, password_resets, failed_jobs, personal_access_tokens
- **Connectivity:** ✅ Verified with direct insert/select

### 5. **SSL/TLS Configuration**
- **Status:** ✅ WORKING
- **Certificate:** Let's Encrypt
- **Protocols:** TLSv1.2, TLSv1.3
- **HSTS:** Enabled (31536000 seconds)
- **Auto-renewal:** ⚠️ Needs setup (certificate expires in ~90 days)

### 6. **n8n Workflow Automation**
- **Status:** ✅ FULLY OPERATIONAL
- **URL:** https://nandurstudio.com/n8n/
- **Technology:** n8n 2.4.4 (latest) with PostgreSQL 16-alpine
- **Authentication:** Basic Auth enabled (admin/n8n_admin_pass)
- **Deployment Date:** January 21, 2026
- **Access Method:** HTTPS subpath `/n8n/` (no port exposure)
- **Health Check:** ✅ `curl https://nandurstudio.com/n8n/healthz`
- **API Endpoints:** ✅ All REST endpoints working
  - Settings: `https://nandurstudio.com/n8nrest/settings`
  - Types: `https://nandurstudio.com/n8ntypes/nodes.json`
- **Static Assets:** ✅ All assets loading correctly
  - JavaScript bundles: `/n8nassets/*`
  - CSS/Fonts: `/n8nstatic/*`
  - Node icons: `/n8nicons/*`
- **Features:**
  - ✅ Webhook automation (URL: https://nandurstudio.com/webhook/)
  - ✅ Workflow scheduling & execution
  - ✅ PostgreSQL backend for data persistence (volume: postgres_data)
  - ✅ n8n data persistence (volume: n8n_data)
  - ✅ WebSocket support for real-time workflow updates
  - ✅ Basic Auth security layer
- **Docker Containers:**
  - `portfolio_n8n`: n8nio/n8n:latest (512MB limit) - healthy
  - `portfolio_postgres`: postgres:16-alpine (256MB limit) - healthy
- **Configuration Details:**
  - **Environment Variables:**
    - `N8N_PATH=/n8n` - Subpath configuration
    - `N8N_EDITOR_BASE_URL=https://nandurstudio.com/n8n/`
    - `N8N_PROTOCOL=https`
    - `DB_TYPE=postgresdb`
    - `GENERIC_TIMEZONE=Asia/Jakarta`
  - **nginx Proxy Configuration:**
    - Multiple location blocks handling n8n's path concatenation bug:
      - `/n8nstatic/` → `http://n8n:5678/static/`
      - `/n8nassets/` → `http://n8n:5678/assets/`
      - `/n8nrest/` → `http://n8n:5678/rest/`
      - `/n8ntypes/` → `http://n8n:5678/types/`
      - `/n8nicons/` → `http://n8n:5678/icons/`
      - `/n8n/` → `http://n8n:5678` (main app with full path preserved)
    - `Accept-Encoding: ""` header to prevent HTTP/2 protocol errors
    - Disabled buffering for real-time streaming
    - 60s timeouts for large asset transfers
- **Known Issues (Non-blocking):**
  - Telemetry endpoints return 404 (normal for self-hosted, cloud-only feature)
  - Ad blockers may block `array.js` (client-side, not server issue)

---

## 📁 Docker Stack Structure

```
/opt/stack/
├── docker-compose.yml
├── services/
│   ├── nginx/
│   │   ├── conf.d/default.conf  # Updated with n8n subpath routing
│   │   └── ssl/
│   │       ├── fullchain.pem
│   │       └── privkey.pem
│   ├── mysql/
│   │   └── init/
│   ├── postgres/           # PostgreSQL 16 for n8n
│   └── flask/
│       └── Dockerfile
├── apps/
│   ├── laravel/          # Laravel 10 backend
│   │   ├── app/
│   │   ├── routes/api.php
│   │   ├── .env (APP_URL=https://nandurstudio.com)
│   │   └── ...
│   └── flask/            # Flask API
│       ├── app.py
│       └── requirements.txt
└── web/                  # Static HTML/CSS/JS
    ├── index.html
    └── assets/
```

---

## 🐳 Running Containers

| Container | Status | Ports | Image |
|-----------|--------|-------|-------|
| portfolio_nginx | ✅ Running | 80→80, 443→443 | nginx:1.24-alpine |
| portfolio_php | ✅ Running | 9000 | php:8.3-fpm |
| portfolio_db | ✅ Healthy | 3306 | mysql:8.0 |
| portfolio_postgres | ✅ Healthy | 5432 | postgres:16-alpine |
| portfolio_flask | ✅ Healthy | 5000 | python:3.12-slim |
| portfolio_n8n | ✅ Healthy | 5678 | n8nio/n8n:latest |

---

## ⚠️ Known Issues & Todo

### 1. Laravel `/api/messages` Endpoint (Priority: HIGH)
**Issue:** POST to `/api/messages` returns 302 redirect to homepage.

**Root Cause:** MessageController validation or middleware redirecting requests.

**Workaround:** Use `/api/test` endpoint which works correctly for POST requests.

**Fix Required:**
- Debug MessageController validation rules
- Check middleware applied to route
- Verify field names match (emailHelp vs email, comments vs message)

**Testing:**
```bash
# Working:
curl -X POST https://nandurstudio.com/api/test \
  -H "Content-Type: application/json" \
  -d '{"test":"data"}'

# Not working:
curl -X POST https://nandurstudio.com/api/messages \
  -H "Content-Type: application/json" \
  -d '{"name":"Test","emailHelp":"test@test.com","subject":"Test","comments":"Message"}'
```

### 3. n8n Password Change (Priority: HIGH)
**Status:** ⚠️ REQUIRED

**Action Required:**
Change default n8n password immediately after first login:
1. Access https://nandurstudio.com/n8n/
2. Login with Basic Auth (admin / n8n_admin_pass)
3. Complete setup wizard
4. Navigate to Settings → Update password

**Security Note:** Current Basic Auth credentials are documented and should be changed immediately.

### 4. Database Backups (Priority: MEDIUM)
**Status:** ⚠️ Not automated

**Action Required:**
Setup automated database backups:
```bash
# Add to crontab for daily backup
0 2 * * * docker exec portfolio_db mysqldump -u root -p'password' portfolio > /backup/portfolio_$(date +\%Y\%m\%d).sql
0 3 * * * docker exec portfolio_postgres pg_dump -U n8n n8n > /backup/n8n_$(date +\%Y\%m\%d).sql
```
- Complete initial setup wizard
- Create workflows for contact form notifications
- Setup webhook integrations

---

## 🔧 Configuration Files

### Nginx Configuration
**Location:** `/opt/stack/services/nginx/conf.d/default.conf`

**Key Features:**
- HTTP→HTTPS redirect (port 80 → 443)
- SSL/TLS with Let's Encrypt certificates
- FastCGI routing for Laravel API (`/api/`)
- Proxy pass for Flask API (`/flask/`)
- Security headers (HSTS, X-Frame-Options, etc.)
- Static file serving for portfolio

### Laravel Environment
**Location:** `/opt/stack/apps/laravel/.env`

**Key Settings:**
```env
APP_URL=https://nandurstudio.com
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=portfolio_user
DB_PASSWORD=your_secure_password  # DO NOT COMMIT; set in server .env
```

**Middleware:**
- TrustProxies: `$proxies = '*'` (trusts all proxies)
- CORS: Allowed origins = `*` for API routes

---

## 📊 Deployment Summary

### ✅ Successfully Deployed:
1. ✅ Docker infrastructure (Engine 29.1.5, Compose v5.0.2)
2. ✅ Static portfolio website with HTTPS
3. ✅ Flask API service (fully functional)
4. ✅ Laravel backend (basic API working)
5. ✅ MySQL database (connected and tested)
6. ✅ PostgreSQL database (for n8n)
7. ✅ n8n workflow automation (fully configured)
8. ✅ SSL/TLS certificates (Let's Encrypt)
9. ✅ Nginx reverse proxy configuration
10. ✅ Firewall rules (UFW: ports 22, 80, 443)

### ⚠️ Partial Issues:
1. ⚠️ Laravel `/api/messages` endpoint needs debugging
2. ⚠️ SSL auto-renewal not configured

### 💰 Cost:
- **Current:** $12/month (2GB Droplet)
- **Credits:** ~$197 GitHub Student credits remaining
- **Runtime:** Sustainable for ~16 months

---

## 🚀 Quick Access

### URLs:
- **Main Website:** https://nandurstudio.com
- **Flask API:** https://nandurstudio.com/flask/
- **Laravel API:** https://nandurstudio.com/api/test
- **n8n Workflow:** https://nandurstudio.com/n8n/
- **Database:** Internal only (docker network)

### SSH Access:
```bash
# Via Cloudflare WARP (bypass ISP port 22 blocking)
ssh portfolio-droplet

# Via DigitalOcean Console (web-based, always works)
# Login: https://cloud.digitalocean.com → Droplet → Console
```

### Docker Commands:
```bash
# On droplet
cd /opt/stack

# View containers
docker compose ps

# View logs
docker compose logs nginx
docker compose logs php
docker compose logs flask
docker compose logs n8n

# Restart services
docker compose restart nginx
docker compose restart php
docker compose restart n8n

# Laravel commands
docker compose exec php php artisan route:list
docker compose exec php php artisan config:cache

# Database access
docker compose exec db mysql -u portfolio_user -p${DB_PASSWORD} portfolio  # Uses DB_PASSWORD from environment (do not hardcode)
docker compose exec postgres psql -U n8n -d n8n
```

---

## 📝 Next Steps

1. **Setup n8n Workflows** (RECOMMENDED)
   - Login to https://nandurstudio.com/n8n/
   - Complete initial setup wizard
   - Create workflow to send contact form email notifications
   - Setup webhook for Laravel `/api/messages` endpoint

2. **Fix Laravel `/api/messages` endpoint** (HIGH PRIORITY)
   - Debug MessageController validation
   - Test with correct field names
   - Add error logging to identify redirect source

3. **Setup SSL auto-renewal** (MEDIUM PRIORITY)
   - Configure certbot cron job
   - Test renewal process

4. **Optimize performance** (LOW PRIORITY)
   - Enable PHP OPcache
   - Configure nginx caching
   - Add CDN for static assets (optional)

5. **Monitoring & Backups** (RECOMMENDED)
   - Setup database backups (daily snapshots)
   - Add uptime monitoring (UptimeRobot, etc.)
   - Configure log rotation

---

**Last Updated:** January 21, 2026  
**Maintainer:** Nandang Duryat  
**Repository:** GitHub (private)
