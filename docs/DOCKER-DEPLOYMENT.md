# Docker Stack Deployment Guide

## Overview
Complete migration to Docker-based infrastructure for:
- **Nginx**: Reverse proxy + static files
- **PHP-FPM**: Laravel backend
- **MySQL**: Database
- **Flask**: Python API (future)
- **n8n**: Workflow automation

## Prerequisites on Droplet

### 1. Install Docker & Docker Compose
```bash
ssh portfolio-droplet

# Install Docker
sudo apt-get update
sudo apt-get install -y ca-certificates curl gnupg
sudo install -m 0755 -d /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
sudo chmod a+r /etc/apt/keyrings/docker.gpg
echo "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
sudo apt-get update
sudo apt-get install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin

# Start and enable Docker
sudo systemctl enable --now docker

# Verify installation
docker --version
docker compose version
```

### 2. Backup Existing MySQL Data
```bash
# Dump all databases
sudo mysqldump -u root -p --all-databases > /tmp/all_databases.sql

# Or specific database
sudo mysqldump -u root -p portfolio > /tmp/portfolio.sql
```

## Deployment Steps

### Step 1: Deploy Files to Droplet
```bash
# From local machine (Windows PowerShell)
cd "E:\Portfolio Nandur\folioflix-personal-portfolio-html-template-2023-11-27-05-37-14-utc\folioflix"
bash deploy-docker.sh
```

Or manually via rsync/scp:
```bash
scp -r docker docker-compose.yml flask nginx .env.docker.example portfolio-droplet:/opt/stack/
```

### Step 2: Configure Environment
```bash
ssh portfolio-droplet
cd /opt/stack

# Create .env from example
cp .env.docker.example .env

# Edit with your values
nano .env
```

Update these values in `.env`:
```env
DB_DATABASE=portfolio
DB_USERNAME=portfolio_user
DB_PASSWORD=your_secure_password

MYSQL_ROOT_PASSWORD=your_root_password

N8N_HOST=n8n.yourdomain.com
WEBHOOK_URL=https://n8n.yourdomain.com/
N8N_USER=admin
N8N_PASSWORD=your_n8n_password

DOMAIN=yourdomain.com
```

### Step 3: Update Nginx Config
```bash
cd /opt/stack
nano nginx/conf.d/default.conf

# Replace 'yourdomain.com' with your actual domain
# Save and exit
```

### Step 4: Build Docker Images
```bash
cd /opt/stack
docker compose build
```

### Step 5: Start MySQL First & Import Data
```bash
# Start only MySQL
docker compose up -d db

# Wait for MySQL to be ready (check logs)
docker compose logs -f db
# Press Ctrl+C when you see "ready for connections"

# Import database
docker compose exec -T db mysql -u root -p${MYSQL_ROOT_PASSWORD} < /tmp/all_databases.sql

# Or create new database
docker compose exec db mysql -u root -p${MYSQL_ROOT_PASSWORD} -e "CREATE DATABASE IF NOT EXISTS portfolio;"
```

### Step 6: Copy Laravel Files
```bash
# If backend not already in /opt/stack/backend
sudo cp -r /var/www/portfolio /opt/stack/backend

# Copy .env file
sudo cp /var/www/portfolio/.env /opt/stack/backend/.env

# Update database connection in backend/.env
nano /opt/stack/backend/.env
```

Update Laravel `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=portfolio_user
DB_PASSWORD=your_secure_password
```

### Step 7: Start All Services
```bash
cd /opt/stack
docker compose up -d

# Check status
docker compose ps

# View logs
docker compose logs -f
```

### Step 8: Run Laravel Migrations
```bash
cd /opt/stack
docker compose exec php php artisan migrate --force
docker compose exec php php artisan config:cache
docker compose exec php php artisan route:cache
```

### Step 9: Configure Firewall
```bash
# Allow Docker ports
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp
sudo ufw allow 22/tcp
sudo ufw enable
```

### Step 10: Stop Old Services
```bash
# Once Docker stack is verified working
sudo systemctl stop apache2 php8.3-fpm mysql
sudo systemctl disable apache2 php8.3-fpm mysql
```

## SSL/TLS Setup with Certbot

### Install Certbot
```bash
sudo apt-get install -y certbot python3-certbot-nginx
```

### Obtain Certificate
```bash
# Stop nginx container temporarily
docker compose stop nginx

# Get certificate
sudo certbot certonly --standalone -d yourdomain.com -d www.yourdomain.com

# Copy certificates to nginx volume
sudo cp /etc/letsencrypt/live/yourdomain.com/fullchain.pem /opt/stack/nginx/ssl/
sudo cp /etc/letsencrypt/live/yourdomain.com/privkey.pem /opt/stack/nginx/ssl/

# Update nginx config to enable HTTPS (uncomment HTTPS server block)
nano /opt/stack/nginx/conf.d/default.conf

# Restart nginx
docker compose up -d nginx
```

### Auto-renewal Setup
```bash
# Test renewal
sudo certbot renew --dry-run

# Add to crontab
sudo crontab -e

# Add this line:
0 0 * * * certbot renew --post-hook "cp /etc/letsencrypt/live/yourdomain.com/*.pem /opt/stack/nginx/ssl/ && cd /opt/stack && docker compose restart nginx"
```

## Useful Commands

### View Logs
```bash
# All services
docker compose logs -f

# Specific service
docker compose logs -f nginx
docker compose logs -f php
docker compose logs -f db
```

### Restart Services
```bash
docker compose restart nginx
docker compose restart php
```

### Stop/Start Stack
```bash
docker compose down
docker compose up -d
```

### Access Container Shell
```bash
docker compose exec php bash
docker compose exec db mysql -u root -p
```

### Update Application
```bash
# Pull latest code
cd /opt/stack
git pull

# Rebuild if Dockerfile changed
docker compose build php

# Restart
docker compose up -d
```

## Monitoring Resources

### Check Container Stats
```bash
docker stats
```

### Check Disk Usage
```bash
docker system df
```

### Cleanup Unused Resources
```bash
docker system prune -a
```

## Troubleshooting

### Container won't start
```bash
# Check logs
docker compose logs [service_name]

# Check container status
docker compose ps
```

### Permission issues
```bash
# Fix Laravel storage permissions
docker compose exec php chown -R www-data:www-data /var/www/laravel/storage
docker compose exec php chmod -R 775 /var/www/laravel/storage
```

### Database connection issues
```bash
# Check database is running
docker compose ps db

# Test connection from php container
docker compose exec php php artisan tinker
>>> DB::connection()->getPdo();
```

### Reset everything
```bash
# Stop and remove all containers, networks, volumes
docker compose down -v

# Start fresh
docker compose up -d
```

## Resource Limits

Current memory allocation (2GB total):
- Nginx: 128MB (implicit)
- PHP-FPM: 384MB
- MySQL: 512MB
- Flask: 256MB
- n8n: 512MB
- System: ~228MB

Total: ~2GB

## Security Checklist

- [ ] Change all default passwords in `.env`
- [ ] Enable UFW firewall (22, 80, 443 only)
- [ ] Setup SSL/TLS certificates
- [ ] Configure fail2ban for SSH
- [ ] Enable Docker user namespace remapping (optional)
- [ ] Regular backup of MySQL volumes
- [ ] Keep Docker images updated

## Backup Strategy

### Database Backup
```bash
# Backup
docker compose exec db mysqldump -u root -p${MYSQL_ROOT_PASSWORD} --all-databases > backup_$(date +%Y%m%d).sql

# Restore
docker compose exec -T db mysql -u root -p${MYSQL_ROOT_PASSWORD} < backup_20260121.sql
```

### Volume Backup
```bash
# Backup n8n data
docker run --rm -v portfolio_n8n_data:/data -v $(pwd):/backup alpine tar czf /backup/n8n_backup.tar.gz -C /data .

# Restore
docker run --rm -v portfolio_n8n_data:/data -v $(pwd):/backup alpine tar xzf /backup/n8n_backup.tar.gz -C /data
```
