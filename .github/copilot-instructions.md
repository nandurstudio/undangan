# Copilot Instructions for FolioFlix Portfolio

## Project Overview
FolioFlix is Nandang Duryat's personal portfolio website with a Docker-based microservices architecture:
- **Frontend**: Static HTML5/CSS3/JS with Bootstrap 4, jQuery, WOW.js animations
- **Backend**: Laravel 10 API + Flask microservices
- **Automation**: n8n workflow automation with PostgreSQL backend
- **Hosting**: DigitalOcean Ubuntu droplet (Singapore, 146.190.87.175) with Docker + nginx

**Live URLs:**
- Main Site: https://nandurstudio.com
- n8n Automation: https://nandurstudio.com/n8n/ (Basic Auth: admin/password)
- Laravel API: https://nandurstudio.com/api/*
- Flask API: https://nandurstudio.com/flask/*

## Architecture & Data Flow

### Current Production Stack (Docker Compose)

**6 Services Running:**
1. **nginx:1.24-alpine** - Reverse proxy, SSL termination, static files
2. **php:8.3-fpm** (custom) - Laravel backend
3. **mysql:8.0** - Laravel database
4. **postgres:16-alpine** - n8n database
5. **python:3.12-slim** (custom) - Flask microservices
6. **n8nio/n8n:latest** - Workflow automation

### Frontend (Static Site)
- **Entry Point**: `index.html` - Single-page application with smooth scrolling
- **Key Sections**: Hero (typing effect), Portfolio (filter/modals), Contact form, Skills
- **Build**: No build step; files served directly via nginx
- **Path**: `/var/www/html` in nginx container → mapped from `/opt/stack/web/`

### Backend Services

#### Laravel API (PHP 8.3 + MySQL 8.0)
- **Framework**: Laravel 10 with Sanctum for API authentication
- **Database**: MySQL 8.0 (container: portfolio_db)
- **Key Routes**: 
  - `GET /api/test` - Health check ✅
  - `POST /api/test` - Echo test ✅
  - `POST /api/messages` - Contact form (⚠️ has 302 redirect issue)
- **Models**: `Message` model with `fillable` fields: name, email, subject, message
- **Path**: `/var/www/laravel` in php container → mapped from `/opt/stack/apps/laravel/`

#### Flask API (Python 3.12)
- **Framework**: Flask with Gunicorn WSGI server
- **Routes**:
  - `GET /flask/` - Service info ✅
  - `GET /flask/health` - Health check JSON ✅
- **Purpose**: Future Python-based features, data processing, ML integration
- **Path**: `/app` in flask container → mapped from `/opt/stack/apps/flask/`

#### n8n Workflow Automation (Node.js + PostgreSQL 16)
- **Database**: PostgreSQL 16-alpine (container: portfolio_postgres)
- **Access**: https://nandurstudio.com/n8n/ (Basic Auth required)
- **Features**:
  - Webhook automation: `/webhook/{path}`
  - Scheduled workflows (cron)
  - Database integrations (MySQL, PostgreSQL)
  - Email notifications via SMTP
  - REST API: `/n8nrest/*`
  - Node types: `/n8ntypes/*`
  - WebSocket: Real-time UI updates via `/n8nrest/push`
- **Environment**:
  - `N8N_PATH=/n8n` - Subpath deployment
  - `N8N_EDITOR_BASE_URL=https://nandurstudio.com/n8n/`
  - `WEBHOOK_URL=https://nandurstudio.com/`
  - `GENERIC_TIMEZONE=Asia/Jakarta`
  - `N8N_BASIC_AUTH_ACTIVE=true`
  - `N8N_DIAGNOSTICS_ENABLED=false` - Disable telemetry
  - `N8N_PERSONALIZATION_ENABLED=false` - Disable personalization
  - `DB_TYPE=postgresdb`

### Frontend-Backend Integration
1. User fills contact form in HTML (`#contactpage`)
2. jQuery validation in `assets/js/contact-form.js` validates fields
3. AJAX POST to `/api/messages` (Laravel endpoint via nginx)
4. nginx proxies to PHP-FPM container
5. Controller stores in MySQL database; returns JSON response
6. Success/error message displayed to user
7. (Optional) Trigger n8n webhook for email notification

## Critical Development Workflows

### SSH Access to DigitalOcean Droplet
**Note:** ISP may block port 22 (SSH). Use Cloudflare WARP to bypass.

```bash
# Method 1: SSH via Cloudflare WARP (Recommended for direct SSH access)
# 1. Download & install: https://1.1.1.1/
# 2. Open Cloudflare WARP app, click "Connect"
# 3. Then SSH will work:
ssh portfolio-droplet
ssh root@146.190.87.175

# Method 2: DigitalOcean Console (No SSH needed - Always works)
# Login to https://cloud.digitalocean.com → Droplet → Console
# Direct web-based terminal access

# Key location:
# Private: ~/.ssh/id_ed25519_portfolio
# Public: ~/.ssh/id_ed25519_portfolio.pub
# Config: ~/.ssh/config (Host portfolio-droplet entry)
```

### Docker Stack Management (Production)

**Server Path:** `/opt/stack/` (all Docker files)

```bash
# Check all container status
ssh portfolio-droplet "cd /opt/stack && sudo docker compose ps"

# View logs (all services)
ssh portfolio-droplet "cd /opt/stack && sudo docker compose logs -f --tail=50"

# View logs (specific service)
ssh portfolio-droplet "cd /opt/stack && sudo docker compose logs nginx -f --tail=30"
ssh portfolio-droplet "cd /opt/stack && sudo docker compose logs n8n -f --tail=30"

# Restart specific service
ssh portfolio-droplet "cd /opt/stack && sudo docker compose restart nginx"
ssh portfolio-droplet "cd /opt/stack && sudo docker compose restart n8n"

# Restart all services
ssh portfolio-droplet "cd /opt/stack && sudo docker compose down && sudo docker compose up -d"

# Rebuild container (after Dockerfile changes)
ssh portfolio-droplet "cd /opt/stack && sudo docker compose build --no-cache php"
ssh portfolio-droplet "cd /opt/stack && sudo docker compose up -d php"

# Execute command inside container
ssh portfolio-droplet "cd /opt/stack && sudo docker compose exec php php artisan migrate"
ssh portfolio-droplet "cd /opt/stack && sudo docker compose exec db mysql -u root -p"

# Health checks
ssh portfolio-droplet "cd /opt/stack && curl -k https://localhost/api/test"
ssh portfolio-droplet "cd /opt/stack && curl -k https://localhost/flask/health"
ssh portfolio-droplet "cd /opt/stack && curl -k https://localhost/n8n/healthz"
```

### Configuration Sync (Local ↔ Server)

**Critical Files to Keep Synchronized:**
1. `docker-compose.yml` - Container orchestration
2. `services/nginx/conf.d/default.conf` - nginx routing

```powershell
# === DOWNLOAD FROM SERVER TO LOCAL ===

# Download docker-compose.yml
scp portfolio-droplet:/opt/stack/docker-compose.yml docker-compose.yml

# Download nginx config
scp portfolio-droplet:/opt/stack/services/nginx/conf.d/default.conf services/nginx/conf.d/default.conf

# Download all nginx configs
scp -r portfolio-droplet:/opt/stack/services/nginx/conf.d/ services/nginx/

# Verify sync (compare files)
scp portfolio-droplet:/opt/stack/docker-compose.yml docker-compose.yml.server-backup
fc.exe docker-compose.yml docker-compose.yml.server-backup

scp portfolio-droplet:/opt/stack/services/nginx/conf.d/default.conf nginx-server-current.conf
fc.exe services/nginx/conf.d/default.conf nginx-server-current.conf


# === UPLOAD FROM LOCAL TO SERVER ===

# Upload docker-compose.yml
scp docker-compose.yml portfolio-droplet:/tmp/docker-compose.yml
ssh portfolio-droplet "cd /opt/stack && sudo mv /tmp/docker-compose.yml ."

# Upload nginx config
scp services/nginx/conf.d/default.conf portfolio-droplet:/tmp/default.conf
ssh portfolio-droplet "cd /opt/stack && sudo mv /tmp/default.conf services/nginx/conf.d/"

# Upload and restart (full workflow)
scp docker-compose.yml portfolio-droplet:/tmp/
ssh portfolio-droplet "cd /opt/stack && sudo mv /tmp/docker-compose.yml . && sudo docker compose up -d"

# Test nginx config before restart
ssh portfolio-droplet "cd /opt/stack && sudo docker compose exec nginx nginx -t"
ssh portfolio-droplet "cd /opt/stack && sudo docker compose restart nginx"
```

### Setup & Running (Local Development)

```bash
# Frontend: No build required
# Open index.html in browser directly

# Backend (Laravel): From /backend directory
cd backend
composer install          # Install PHP dependencies
cp .env.example .env      # Create environment file
php artisan key:generate  # Set APP_KEY
php artisan migrate       # Run database migrations
php artisan serve         # Dev server on http://localhost:8000

# Flask: From /apps/flask directory
cd apps/flask
python -m venv venv       # Create virtual environment
source venv/bin/activate  # Linux/Mac
venv\Scripts\activate     # Windows
pip install -r requirements.txt
python app.py             # Dev server on http://localhost:5000

# Docker (Full stack): From root directory
docker compose up -d      # Start all services
docker compose logs -f    # View logs
docker compose down       # Stop all services
```

### Deployment to Production

**Method 1: Configuration Changes Only (docker-compose.yml or nginx)**

```bash
# 1. Edit files locally (docker-compose.yml, nginx config)
# 2. Upload to server
scp docker-compose.yml portfolio-droplet:/tmp/
scp services/nginx/conf.d/default.conf portfolio-droplet:/tmp/

# 3. SSH to server and apply
ssh portfolio-droplet
cd /opt/stack
sudo mv /tmp/docker-compose.yml .
sudo mv /tmp/default.conf services/nginx/conf.d/

# 4. Restart affected services
sudo docker compose up -d              # Apply docker-compose changes
sudo docker compose exec nginx nginx -t  # Test nginx config
sudo docker compose restart nginx       # Restart nginx

# 5. Verify
sudo docker compose ps
curl -k https://localhost/api/test
```

**Method 2: Code Changes (Laravel/Flask)**

```bash
# For Laravel changes:
# 1. Edit code in backend/ directory locally
# 2. Commit to git
git add backend/
git commit -m "Fix: Laravel API endpoint"
git push origin prod

# 3. SSH to server and pull
ssh portfolio-droplet
cd /opt/stack
git pull origin prod

# 4. If composer dependencies changed:
sudo docker compose exec php composer install --no-dev
sudo docker compose exec php php artisan migrate --force
sudo docker compose exec php php artisan config:cache
sudo docker compose restart php

# For Flask changes:
# Similar workflow but restart flask container
sudo docker compose restart flask
```

**Method 3: Full Redeployment**

```bash
ssh portfolio-droplet
cd /opt/stack
git pull origin prod
sudo docker compose down
sudo docker compose build --no-cache
sudo docker compose up -d
sudo docker compose ps  # Verify all healthy
```

### Testing Backend

```bash
# Laravel (from backend/ directory or php container)
php artisan tinker       # Interactive shell
php artisan test         # Run PHPUnit tests
php artisan migrate:fresh --seed  # Reset DB with test data

# Docker exec into containers
ssh portfolio-droplet "cd /opt/stack && sudo docker compose exec php php artisan tinker"
ssh portfolio-droplet "cd /opt/stack && sudo docker compose exec db mysql -u root -p"
ssh portfolio-droplet "cd /opt/stack && sudo docker compose exec postgres psql -U n8n -d n8n"

# API testing with curl
curl -X GET https://nandurstudio.com/api/test
curl -X POST https://nandurstudio.com/api/test -H "Content-Type: application/json" -d '{"test":"data"}'
curl -X GET https://nandurstudio.com/flask/health
curl -X GET https://nandurstudio.com/n8n/healthz -u admin:password
```

## Project Structure & Key Files

### Production Server Structure (`/opt/stack/`)
```
/opt/stack/
├── docker-compose.yml          # Container orchestration
├── .env                        # Environment variables (DB passwords, etc)
│
├── web/                        # Frontend (nginx serves from here)
│   ├── index.html
│   └── assets/
│       ├── css/, js/, image/
│
├── apps/
│   ├── laravel/                # Laravel backend
│   │   ├── app/, routes/, config/
│   │   ├── .env
│   │   └── composer.json
│   └── flask/                  # Flask microservices
│       ├── app.py
│       └── requirements.txt
│
├── services/
│   ├── nginx/
│   │   └── conf.d/
│   │       └── default.conf    # CRITICAL: nginx routing config
│   ├── mysql/
│   │   └── init/               # MySQL init scripts
│   └── php/
│       └── Dockerfile          # Custom PHP-FPM image
│
├── docker/                     # Dockerfiles
│   ├── php/
│   │   └── Dockerfile
│   └── flask/
│       └── Dockerfile
│
└── data/                       # Persistent volumes (Docker creates)
    ├── mysql/                  # MySQL data
    ├── postgres/               # PostgreSQL data (n8n)
    └── n8n/                    # n8n workflow data
```

### Local Workspace Structure
```
E:\Portfolio Nandur\folioflix\
├── index.html              # Main page HTML
├── docker-compose.yml      # Keep synced with server
├── contact-form.php        # Legacy (deprecated, not used)
│
├── assets/
│   ├── css/
│   │   ├── style.css      # Main styles
│   │   ├── mobile.css     # Responsive breakpoints
│   │   ├── super-classes.css  # Utility classes
│   │   └── animate.css    # Animation keyframes
│   ├── js/
│   │   ├── main.js        # Core logic (filters, scroll, nav)
│   │   ├── contact-form.js # Form validation & AJAX submission
│   │   └── [libraries]    # Bootstrap, jQuery, WOW.js
│   └── image/             # Static portfolio images
│
├── backend/                # Laravel API
│   ├── app/
│   │   ├── Models/Message.php
│   │   └── Http/Controllers/Api/
│   │       └── MessageController.php
│   ├── routes/api.php     # API routes
│   ├── database/migrations/
│   ├── config/            # Database, mail, CORS settings
│   └── .env               # Environment variables
│
├── apps/
│   └── flask/             # Flask microservices
│       ├── app.py
│       └── requirements.txt
│
├── services/
│   └── nginx/
│       └── conf.d/
│           └── default.conf  # Keep synced with server
│
├── docker/
│   ├── php/Dockerfile     # Custom PHP image
│   └── flask/Dockerfile   # Custom Flask image
│
└── .github/
    └── copilot-instructions.md  # This file
```

## Code Patterns & Conventions

### Contact Form Handling (Frontend → Backend)
**Old Pattern** (deprecated): `contact-form.php` uses `$_POST` and `mail()` function
**Current Pattern**: `contact-form.js` → Laravel API → Database

Always use Laravel API for new features. The `contact-form.php` file is legacy but still referenced for email notifications.

### Frontend JavaScript Patterns
- **jQuery-based**: No modern framework (Vue/React); uses jQuery 3.6.0
- **Event Listeners**: Portfolio filter buttons use vanilla JS event delegation
- **Animation**: WOW.js for scroll-triggered animations (`.wow`, `.fadeIn`, etc.)
- **Styling Selectors**: `#dynamicName`, `.filterDiv`, `.filterbuttons`

### CSS Organization
- **Utility Classes**: `super-classes.css` contains flex/grid/spacing helpers
- **Responsive**: Mobile-first approach; breakpoints defined in `mobile.css`
- **Bootstrap Integration**: Form components use Bootstrap 4 utilities

### Laravel Conventions
- **Models**: Single model `Message` with mass-assignable `fillable` array
- **Routing**: Grouped under `api` middleware; no resource routes needed yet
- **Migrations**: Database agnostic; schemas in `database/migrations/`
- **API Responses**: Return JSON with `status` field ("Success"/"error") and message

## Important Integration Points & Gotchas

### SSH & Droplet Access
- **Droplet IP**: 146.190.87.175 (Singapore region)
- **SSH Port**: 22 (standard)
- **Root User**: root with password authentication enabled
- **SSH Key**: Ed25519 key at `~/.ssh/id_ed25519_portfolio`
- **Access Method**: 
  - Preferred: DigitalOcean Console (web-based, no port blocking)
  - Alternative: SSH via key (if ISP allows port 22)
- **ISP Note**: Port 22 may be blocked by ISP; use DigitalOcean Console if SSH times out

### Docker Services Configuration

**Container Names:**
- `portfolio_nginx` - Frontend + reverse proxy
- `portfolio_php` - Laravel PHP-FPM
- `portfolio_db` - MySQL 8.0
- `portfolio_postgres` - PostgreSQL 16 (n8n)
- `portfolio_flask` - Flask API
- `portfolio_n8n` - n8n automation

**Port Mappings:**
- `80, 443` (nginx) - Public HTTP/HTTPS
- `9000` (php) - Internal PHP-FPM
- `3306` (mysql) - Internal MySQL
- `5432` (postgres) - Internal PostgreSQL
- `5000` (flask) - Internal Flask
- `5678` (n8n) - Internal n8n (no external port)

**Environment Variables (docker-compose.yml):**
```yaml
# MySQL
MYSQL_ROOT_PASSWORD: ${DB_ROOT_PASSWORD:-root_secure_pass}
MYSQL_DATABASE: ${DB_DATABASE:-portfolio}
MYSQL_USER: ${DB_USERNAME:-portfolio_user}
MYSQL_PASSWORD: ${DB_PASSWORD:-portfolio_pass}

# PostgreSQL (n8n)
POSTGRES_USER: n8n
POSTGRES_PASSWORD: n8n_secure_pass
POSTGRES_DB: n8n

# n8n
N8N_HOST: nandurstudio.com
N8N_PORT: 5678
N8N_PROTOCOL: https
N8N_PATH: /n8n
N8N_EDITOR_BASE_URL: https://nandurstudio.com/n8n/
WEBHOOK_URL: https://nandurstudio.com/
GENERIC_TIMEZONE: Asia/Jakarta
N8N_BASIC_AUTH_ACTIVE: true
N8N_BASIC_AUTH_USER: admin
N8N_BASIC_AUTH_PASSWORD: ${N8N_PASSWORD}
N8N_DIAGNOSTICS_ENABLED: false
N8N_PERSONALIZATION_ENABLED: false
N8N_VERSION_NOTIFICATIONS_ENABLED: false
N8N_TEMPLATES_ENABLED: false
DB_TYPE: postgresdb
DB_POSTGRESDB_HOST: postgres
DB_POSTGRESDB_DATABASE: n8n
```

### nginx Configuration (Critical)

**n8n Subpath Routing Bug:**
n8n 2.4.4 has a path concatenation bug when `N8N_PATH=/n8n` is set. Instead of generating URLs like `/n8n/static/`, it generates `/n8nstatic/` (missing separator slash).

**Workaround:** Create separate location blocks for each incorrect path:

```nginx
# n8n static assets - route /n8nstatic to /static
location /n8nstatic/ {
    proxy_pass http://n8n:5678/static/;
    proxy_set_header Accept-Encoding "";  # Prevent HTTP/2 protocol errors
    proxy_http_version 1.1;
    proxy_buffering off;
    proxy_read_timeout 60s;
}

# n8n JavaScript bundles - route /n8nassets to /assets
location /n8nassets/ {
    proxy_pass http://n8n:5678/assets/;
    proxy_set_header Accept-Encoding "";
    proxy_http_version 1.1;
    proxy_buffering off;
    proxy_read_timeout 60s;
}

# n8n REST API - route /n8nrest to /rest (with WebSocket support)
location /n8nrest/ {
    proxy_pass http://n8n:5678/rest/;
    proxy_set_header Host $host;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header X-Forwarded-Proto $scheme;
    proxy_set_header Authorization $http_authorization;
    proxy_pass_header Authorization;
    
    # WebSocket support for /rest/push
    proxy_http_version 1.1;
    proxy_set_header Upgrade $http_upgrade;
    proxy_set_header Connection "upgrade";
    proxy_read_timeout 86400;  # 24 hours for WebSocket
}

# n8n node types - route /n8ntypes to /types
location /n8ntypes/ {
    proxy_pass http://n8n:5678/types/;
    proxy_set_header Accept-Encoding "";
}

# n8n icons - route /n8nicons to /icons
location /n8nicons/ {
    proxy_pass http://n8n:5678/icons/;
    proxy_set_header Accept-Encoding "";
}

# n8n favicon
location ~ ^/n8nfavicon\.(ico|png)$ {
    proxy_pass http://n8n:5678/favicon.$1;
}

# n8n main app
location /n8n/ {
    proxy_pass http://n8n:5678/;
    proxy_set_header Host $host;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header X-Forwarded-Proto $scheme;
    proxy_read_timeout 300s;  # 5 minutes for workflow execution
}
```

**Key nginx Settings:**
- `Accept-Encoding: ""` - Prevents HTTP/2 protocol errors with compressed responses
- `proxy_buffering off` - Streams large JavaScript files without delay
- `proxy_http_version 1.1` - Required for WebSocket upgrade
- `Authorization` header passthrough - Required for Basic Auth on WebSocket `/rest/push`

### Common Issues & Troubleshooting

**Issue 1: n8n "Connection issue or server is down"**
- **Symptom**: n8n UI loads but shows connection error
- **Cause**: WebSocket `/n8nrest/push` getting 401 Unauthorized
- **Solution**: Ensure nginx `/n8nrest/` location has:
  ```nginx
  proxy_set_header Authorization $http_authorization;
  proxy_pass_header Authorization;
  proxy_http_version 1.1;
  proxy_set_header Upgrade $http_upgrade;
  proxy_set_header Connection "upgrade";
  ```

**Issue 2: n8n assets fail to load (ERR_HTTP2_PROTOCOL_ERROR)**
- **Symptom**: JavaScript/CSS files return protocol errors
- **Cause**: nginx requesting compressed response, modifying Content-Length, HTTP/2 mismatch
- **Solution**: Add `proxy_set_header Accept-Encoding "";` to force uncompressed

**Issue 3: n8n assets stalled/pending**
- **Symptom**: Large JS bundles stuck in "Pending" state
- **Cause**: Default proxy buffering + timeout too short
- **Solution**: Add `proxy_buffering off; proxy_read_timeout 60s;`

**Issue 4: Laravel `/api/messages` returns 302 redirect**
- **Symptom**: Contact form AJAX gets redirect instead of JSON
- **Cause**: Middleware or validation logic issue
- **Status**: Under investigation
- **Workaround**: Use `/api/test` endpoint for testing

**Issue 5: Docker container not starting**
- **Check logs**: `sudo docker compose logs [service] --tail=50`
- **Check status**: `sudo docker compose ps`
- **Rebuild**: `sudo docker compose build --no-cache [service]`
- **Restart**: `sudo docker compose restart [service]`

**Issue 6: Configuration sync drift**
- **Symptom**: Local and server configs don't match
- **Check**: `fc.exe docker-compose.yml docker-compose.yml.server-backup`
- **Download**: `scp portfolio-droplet:/opt/stack/docker-compose.yml docker-compose.yml`
- **Upload**: `scp docker-compose.yml portfolio-droplet:/tmp/ && ssh portfolio-droplet "cd /opt/stack && sudo mv /tmp/docker-compose.yml ."`

### CORS Configuration
- Laravel `config/cors.php`:
  - Ensure frontend domain is whitelisted for `/api/messages` POST requests
  - Allowed origins: `https://nandurstudio.com`
  - Allowed methods: GET, POST, PUT, DELETE
  - Credentials: Supported

### Database Migrations
- Always create migration for schema changes: `php artisan make:migration`
- Current migration path: `backend/database/migrations/`
- Run on server: `sudo docker compose exec php php artisan migrate --force`

### Contact Form Fields Mismatch
- Frontend HTML fields: `name`, `phone`, `emailHelp` (NOT standard), `subject`, `comments`
- Backend Message model expects: `name`, `email`, `subject`, `message`
- **Mismatch Note**: Frontend `emailHelp` → backend `email`; frontend `comments` → backend `message`

### Authentication
- **n8n**: Basic Auth (admin/password) - Change password via environment variable
- **Laravel**: Sanctum API token authentication (configured, not yet used)
- **SSH**: Ed25519 key authentication + password authentication enabled

### Static Assets
- Images live in `assets/image/` (local) → `/var/www/html/assets/image/` (nginx container)
- Reference relative paths: `assets/image/portfolio-model-img1.jfif`
- No asset versioning; rely on browser cache busting if needed

## Git Workflow & Deployment

### Branching
- **Production**: `prod` branch (main development branch)
- **Deployment**: Push to `prod` → SSH to server → `git pull` → restart services

### Commit Conventions
- Descriptive messages: `"Feature: Add admin dashboard"`, `"Fix: Contact form CORS"`, `"Config: Update n8n WebSocket auth"`
- Atomic commits: One logical change per commit

### Quick Deployment Workflow

```bash
# 1. Make changes locally
# 2. Test locally (if possible with Docker)
docker compose up -d
curl http://localhost/api/test

# 3. Commit and push
git add .
git commit -m "Fix: Description of change"
git push origin prod

# 4. Deploy to server
ssh portfolio-droplet
cd /opt/stack
git pull origin prod
sudo docker compose up -d  # Recreates changed services
sudo docker compose ps     # Verify all healthy

# 5. Test production
curl -k https://localhost/api/test
curl -k https://localhost/flask/health
curl -k https://localhost/n8n/healthz
```

## Quick Reference Commands

### Daily Operations

```bash
# Check all services
ssh portfolio-droplet "cd /opt/stack && sudo docker compose ps"

# View recent logs
ssh portfolio-droplet "cd /opt/stack && sudo docker compose logs --tail=100 -f"

# Restart specific service
ssh portfolio-droplet "cd /opt/stack && sudo docker compose restart nginx"

# Test endpoints
curl https://nandurstudio.com/api/test
curl https://nandurstudio.com/flask/health
curl -u admin:password https://nandurstudio.com/n8n/healthz

# Sync configs (download from server)
scp portfolio-droplet:/opt/stack/docker-compose.yml docker-compose.yml
scp portfolio-droplet:/opt/stack/services/nginx/conf.d/default.conf services/nginx/conf.d/default.conf

# Verify sync
fc.exe docker-compose.yml docker-compose.yml.server-backup
```

### Emergency Procedures

```bash
# Full restart (if services stuck)
ssh portfolio-droplet "cd /opt/stack && sudo docker compose down && sudo docker compose up -d"

# View logs for troubleshooting
ssh portfolio-droplet "cd /opt/stack && sudo docker compose logs [service] --tail=50"

# Check disk space (if containers failing)
ssh portfolio-droplet "df -h"

# Clean up Docker resources (if disk full)
ssh portfolio-droplet "sudo docker system prune -a"

# Database backup (before major changes)
ssh portfolio-droplet "sudo docker compose exec db mysqldump -u root -p portfolio > /tmp/backup.sql"
ssh portfolio-droplet "sudo docker compose exec postgres pg_dump -U n8n n8n > /tmp/n8n_backup.sql"
```

### Configuration Update Workflow

```bash
# 1. Download current config
scp portfolio-droplet:/opt/stack/services/nginx/conf.d/default.conf nginx-backup.conf

# 2. Edit locally (in services/nginx/conf.d/default.conf)

# 3. Upload to server
scp services/nginx/conf.d/default.conf portfolio-droplet:/tmp/default.conf
ssh portfolio-droplet "cd /opt/stack && sudo mv /tmp/default.conf services/nginx/conf.d/"

# 4. Test nginx config
ssh portfolio-droplet "cd /opt/stack && sudo docker compose exec nginx nginx -t"

# 5. Apply changes
ssh portfolio-droplet "cd /opt/stack && sudo docker compose restart nginx"

# 6. Verify
ssh portfolio-droplet "cd /opt/stack && sudo docker compose logs nginx --tail=20"
curl -I https://nandurstudio.com/
```

## Security Notes

- **Never commit** `.env` files with real credentials
- **Change default passwords** for n8n, MySQL, PostgreSQL in production
- **Use secrets management** for sensitive values in docker-compose.yml
- **Firewall**: Only ports 22, 80, 443 should be open
- **SSL**: Let's Encrypt certificates auto-renew via Certbot
- **SSH**: Key-based authentication preferred over passwords
- **Basic Auth**: n8n requires admin credentials (change from default)

## Performance Tips

- **nginx**: Gzip compression enabled for text assets
- **Static files**: Served directly by nginx (not proxied through Laravel)
- **Database**: Connection pooling not yet implemented (future optimization)
- **Caching**: No Redis/Memcached yet (consider for high traffic)
- **CDN**: No CDN integration yet (consider CloudFlare for global users)

## Known Limitations

- Single server deployment (no horizontal scaling)
- No automated backups (manual only)
- No CI/CD pipeline (manual deployment)
- No monitoring/alerting (consider Prometheus + Grafana)
- No load balancing (single nginx instance)

## Future Architecture Plans
- **Blog/Articles**: Dynamic content management (CRUD)
- **Admin Panel**: Authentication & dashboard for managing messages & portfolio items
- **Testimonials**: Dynamic section with database storage
- **Build Tool**: Consider Vite (config exists) for frontend asset bundling
- **Monitoring**: Prometheus + Grafana for metrics and alerting
- **CI/CD**: GitHub Actions for automated testing and deployment
- **AI Chatbot**: Ollama + LangChain RAG system with n8n orchestration for PDF-based Q&A

## Documentation References
- [README.md](../README.md) - Main project documentation
- [PROJECT-STRUCTURE.md](../docs/PROJECT-STRUCTURE.md) - Project organization
- [SourceOfTruth.md](../docs/SourceOfTruth.md) - Authoritative project state
- [DEPLOYMENT-STATUS.md](../docs/DEPLOYMENT-STATUS.md) - Current deployment status
- [N8N-SETUP-GUIDE.md](../docs/N8N-SETUP-GUIDE.md) - n8n configuration guide
- [NGINX-N8N-CONFIG.md](../docs/NGINX-N8N-CONFIG.md) - nginx configuration details
- [CONFIG-SYNC-STATUS.md](../docs/CONFIG-SYNC-STATUS.md) - Configuration sync tracking
- [Laravel README](../backend/README.md) - Laravel setup details

---

**Last Updated:** January 21, 2026  
**Maintainer:** Nandang Duryat (founder@nandurstudio.com)
