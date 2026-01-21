# n8n Workflow Automation - Setup Guide

**Status:** ✅ FULLY OPERATIONAL  
**Deployment Date:** January 21, 2026  
**URL:** https://nandurstudio.com/n8n/  
**Version:** n8n 2.4.4 (latest)  
**Database:** PostgreSQL 16-alpine  
**Access:** HTTPS subpath via nginx reverse proxy  
**Timezone:** Asia/Jakarta  

---

## 🎯 Current Status

✅ **All Systems Operational**
- Main application accessible and loading correctly
- All JavaScript bundles loading (assets, static files)
- REST API endpoints responding correctly
- Node icons and SVG assets loading
- WebSocket connections working for real-time updates
- PostgreSQL database connected and persisting data
- Basic Authentication protecting access

⚠️ **Non-blocking Issues (Normal for Self-hosted)**
- Telemetry endpoints return 404 (cloud-only feature, doesn't affect functionality)
- Ad blockers may block analytics scripts (client-side, doesn't affect n8n operation)  

---

## 🔑 Access Credentials

**Authentication:** Basic Auth  
**Username:** `admin`  
**Password:** `your_n8n_password`  — **Change immediately after setup**

> ⚠️ **IMPORTANT:** Change the default password after first login!

---

## 🚀 First Login Steps

1. **Access n8n Dashboard**
   ```
   https://nandurstudio.com/n8n/
   ```
   
   ⚠️ **Note:** Browser will prompt for Basic Auth credentials (username/password).

2. **Login with Basic Auth**
   - Browser will prompt for username/password
   - Enter credentials above

3. **Complete Setup Wizard**
   - Set admin email
   - Configure user account
   - Choose deployment type (Production)

4. **Change Default Password**
   - Navigate to Settings → Users → Your Profile
   - Update password immediately

---

## 📧 Contact Form Integration Workflow

### Overview
Setup automated email notifications when users submit contact form on portfolio website.

### Workflow Steps

1. **Create New Workflow**
   - Click "New Workflow" button
   - Name: "Portfolio Contact Form Notifications"

2. **Add Webhook Trigger**
   - Click "+" to add node
   - Select "Webhook" trigger
   - Configuration:
     - HTTP Method: POST
     - Path: `contact-form`
     - Authentication: None (public webhook)
   - Copy webhook URL (will be like: `https://nandurstudio.com/n8n/webhook/contact-form`)

3. **Add Email Node**
   - Click "+" after webhook
   - Select "Send Email" (or Gmail/SMTP node)
   - Configuration:
     - From: `noreply@nandurstudio.com`
     - To: `your-email@example.com`
     - Subject: `New Contact Form: {{ $json.subject }}`
     - Body:
       ```
       New message from portfolio website:
       
       Name: {{ $json.name }}
       Email: {{ $json.emailHelp }}
       Subject: {{ $json.subject }}
       Message: {{ $json.comments }}
       
       Timestamp: {{ $now }}
       ```

4. **Save & Activate**
   - Click "Save" button
   - Toggle "Active" switch to ON

---

## 🔗 Connect Laravel to n8n

### Update Contact Form (frontend)

**File:** `assets/js/contact-form.js`

Add n8n webhook call after Laravel API:

```javascript
// Existing Laravel API call
$.ajax({
    url: '/api/messages',
    method: 'POST',
    data: formData,
    success: function(response) {
        // Show success message
        
        // Also send to n8n for email notification
        $.ajax({
            url: 'https://nandurstudio.com/n8n/webhook/contact-form',
            method: 'POST',
            data: formData,
            crossDomain: true
        });
    }
});
```

**OR** configure n8n webhook in Laravel MessageController:

```php
// In MessageController::store()
public function store(Request $request)
{
    // ... validation & save to database
    
    // Send to n8n for notifications
    $webhookUrl = 'https://nandurstudio.com/n8n/webhook/contact-form';
    Http::post($webhookUrl, [
        'name' => $request->input('emailHelp'),
        'email' => $request->input('emailHelp'),
        'subject' => $request->input('subject'),
        'comments' => $request->input('comments'),
    ]);
    
    return response()->json(['status' => 'success']);
}
```

---

## 🛠️ Common Workflows

### 1. **Database Backup Notifications**
- Trigger: Schedule (daily at 2 AM)
- Action: Run backup script
- Notification: Send email/Slack if backup fails

### 2. **Portfolio Analytics**
- Trigger: Schedule (weekly)
- Action: Query Laravel database for stats
- Notification: Send weekly summary email

### 3. **Deployment Notifications**
- Trigger: Webhook from GitHub
- Action: Parse deployment status
- Notification: Send to Slack/Discord

### 4. **Uptime Monitoring**
- Trigger: Schedule (every 5 minutes)
- Action: Check website/API availability
- Notification: Alert if down

---

## 🔧 Configuration Options

### Environment Variables
**Location:** `/opt/stack/docker-compose.yml` → n8n service

```yaml
environment:
  - N8N_HOST=n8n.nandurstudio.com
  - N8N_PROTOCOL=https
  - WEBHOOK_URL=https://nandurstudio.com/n8n/
  - GENERIC_TIMEZONE=Asia/Jakarta
  - N8N_BASIC_AUTH_ACTIVE=true
  - N8N_BASIC_AUTH_USER=admin
  - N8N_BASIC_AUTH_PASSWORD=your_n8n_password  # DO NOT COMMIT; set securely
  - DB_TYPE=postgresdb
  - DB_POSTGRESDB_HOST=postgres
  - N8N_PATH=/n8n
```

### Update Configuration

1. **Edit docker-compose.yml:**
   ```bash
   ssh portfolio-droplet
   cd /opt/stack
   sudo nano docker-compose.yml
   ```

2. **Restart n8n:**
   ```bash
   sudo docker compose restart n8n
   ```

---

## 📊 Health & Status

### Check n8n Health
```bash
curl https://nandurstudio.com/n8n/healthz
# Expected: {"status":"ok"}
```

### View n8n Logs
```bash
ssh portfolio-droplet
cd /opt/stack
sudo docker compose logs n8n --tail 50
```

### Container Status
```bash
ssh portfolio-droplet
cd /opt/stack
sudo docker compose ps n8n
```

---

## 🗄️ Database Management

### Access PostgreSQL (n8n database)
```bash
ssh portfolio-droplet
cd /opt/stack
sudo docker compose exec postgres psql -U n8n -d n8n
```

### Common SQL Queries
```sql
-- List all workflows
SELECT id, name, active FROM workflow_entity;

-- List all executions (last 10)
SELECT id, workflow_id, finished, mode 
FROM execution_entity 
ORDER BY "startedAt" DESC 
LIMIT 10;

-- Count active workflows
SELECT COUNT(*) FROM workflow_entity WHERE active = true;
```

### Backup n8n Database
```bash
ssh portfolio-droplet
cd /opt/stack
sudo docker compose exec postgres pg_dump -U n8n n8n > n8n_backup_$(date +%Y%m%d).sql
```

---

## 🔐 Security Recommendations

1. **Change Default Password**
   - Update `N8N_BASIC_AUTH_PASSWORD` in docker-compose.yml
   - Use strong password (min 16 characters)

2. **Enable Additional Authentication**
   - Consider OAuth2/SAML for production
   - Limit access by IP if possible

3. **Secure Webhooks**
   - Use webhook authentication headers
   - Validate incoming requests
   - Rate limit webhook endpoints

4. **Regular Updates**
   ```bash
   ssh portfolio-droplet
   cd /opt/stack
   sudo docker compose pull n8n
   sudo docker compose up -d n8n
   ```

---

## 🐛 Troubleshooting

### n8n Not Loading
**Check nginx config:**
```bash
ssh portfolio-droplet
sudo docker compose exec nginx nginx -t
```

**Check n8n logs:**
```bash
sudo docker compose logs n8n --tail 100
```

### Webhook Not Receiving Data
**Test webhook directly:**
```bash
curl -X POST https://nandurstudio.com/n8n/webhook/test \
  -H "Content-Type: application/json" \
  -d '{"test":"data"}'
```

**Check n8n execution logs:**
- Login to n8n dashboard
- Navigate to "Executions" tab
- View error details

### Database Connection Issues
**Verify PostgreSQL is healthy:**
```bash
sudo docker compose ps postgres
sudo docker compose logs postgres --tail 20
```

**Test connection:**
```bash
sudo docker compose exec n8n sh -c 'echo "SELECT 1" | psql -h postgres -U n8n -d n8n'
```

---

## 📚 Resources

- **Official Docs:** https://docs.n8n.io/
- **Community Forum:** https://community.n8n.io/
- **Workflow Templates:** https://n8n.io/workflows
- **API Reference:** https://docs.n8n.io/api/

---

## 🎯 Quick Commands Reference

```bash
# Restart n8n
ssh portfolio-droplet "cd /opt/stack && sudo docker compose restart n8n"

# View real-time logs
ssh portfolio-droplet "cd /opt/stack && sudo docker compose logs -f n8n"

# Check health status
curl https://nandurstudio.com/n8n/healthz

# Access n8n CLI
ssh portfolio-droplet "cd /opt/stack && sudo docker compose exec n8n n8n --help"

# Export workflows (backup)
ssh portfolio-droplet "cd /opt/stack && sudo docker compose exec n8n n8n export:workflow --all --output=/home/node/.n8n/workflows_backup.json"
```

---

**Last Updated:** January 21, 2026  
**Maintainer:** Nandang Duryat  
**Support:** Check logs first, then community forums
