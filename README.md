# Portfolio Project - Nandang Duryat

Personal portfolio website showcasing 3D art and development projects with dynamic contact form.

## Project Structure
- `index.html` - Main portfolio page
- `assets/` - CSS, JS, images
- `backend/` - Laravel API for contact form
- `deploy.sh` - Deployment script

## Development Workflow

### Branches
- `dev` - Development branch
- `prod` - Production branch

### Workflow Steps
1. **Development**: Work on `dev` branch in VSCode
2. **Commit Changes**: `git add . && git commit -m "Your message"`
3. **Push to Dev**: `git push origin dev`
4. **Deploy to Dev Server**: Run `./deploy.sh dev`
5. **Test on Dev Server**
6. **Merge to Prod**: `git checkout prod && git merge dev`
7. **Push to Prod**: `git push origin prod`
8. **Deploy to Prod Server**: Run `./deploy.sh prod`

## Deployment Setup

### Prerequisites
- SSH access to dev and prod servers
- Configure server IPs in `deploy.sh`
- Install required software on servers (Apache/Nginx, PHP, etc.)

### Server Setup (Ubuntu/Debian)
```bash
# Install Apache, PHP, SQLite
sudo apt update
sudo apt install apache2 php php-sqlite3 php-mbstring php-xml php-curl

# Configure virtual host
sudo nano /etc/apache2/sites-available/portfolio.conf
# Add virtual host config pointing to /var/www/portfolio-*

sudo a2ensite portfolio.conf
sudo systemctl reload apache2
```

## DigitalOcean Project Info
- **Project Name**: portfolio-project
- **Purpose**: Personal portfolio website with dynamic contact form
- **Environment**: Production (with dev environment)
- **Description**: Professional portfolio for Nandang Duryat featuring 3D art projects, skills showcase, and contact functionality with Laravel backend for message storage.