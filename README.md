# Portfolio Project - Nandang Duryat

Personal portfolio website showcasing 3D art and development projects with dynamic contact form.

## Project Structure
- `index.html` - Main portfolio page
- `assets/` - CSS, JS, images
- `backend/` - Laravel API for contact form
- `deploy.sh` - Deployment script

## Development Workflow

### Branches
- `prod` - Production branch (main development branch)

### Workflow Steps
1. **Development**: Work on `prod` branch in VSCode
2. **Commit Changes**: `git add . && git commit -m "Your message"`
3. **Push to GitHub**: `git push origin prod`
4. **Deploy to Production**: Run `./deploy.sh`

## Deployment Setup

### Prerequisites
- DigitalOcean droplet with Ubuntu 22.04
- SSH access to production server
- Configure droplet IP in `deploy.sh`

### Server Setup (Ubuntu/Debian)
```bash
# Run the automated setup script
chmod +x server-setup.sh
./server-setup.sh

# Or manual setup:
sudo apt update
sudo apt install apache2 php php-sqlite3 php-mbstring php-xml php-curl

# Configure virtual host
sudo nano /etc/apache2/sites-available/portfolio.conf
# Add virtual host config pointing to /var/www/portfolio

sudo a2ensite portfolio.conf
sudo systemctl reload apache2
```

## DigitalOcean Project Info
- **Project Name**: portfolio-project
- **Purpose**: Personal portfolio website with dynamic contact form
- **Environment**: Production (with dev environment)
- **Description**: Professional portfolio for Nandang Duryat featuring 3D art projects, skills showcase, and contact functionality with Laravel backend for message storage.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Repository

- **GitHub**: [https://github.com/nandurstudio/portfolio-project](https://github.com/nandurstudio/portfolio-project)
- **Author**: Nandang Duryat (nandurstudio)
- **Email**: nandang.dhe@gmail.com