#!/bin/bash

# Complete Portfolio Server Setup Script
# Run this on your DigitalOcean droplet as root

echo "🚀 Starting Complete Portfolio Server Setup..."

# Function to create user
create_user() {
    echo "👤 Creating user 'nandur-agent'..."

    # Create user
    sudo adduser nandur-agent --gecos "Nandur Agent,,," --disabled-password

    # Set password (you can change this)
    echo "nandur-agent:PortfolioAgent2024!" | sudo chpasswd

    # Add to sudo group
    sudo usermod -aG sudo nandur-agent

    # Create .ssh directory
    sudo mkdir -p /home/nandur-agent/.ssh
    sudo chown nandur-agent:nandur-agent /home/nandur-agent/.ssh
    sudo chmod 700 /home/nandur-agent/.ssh

    echo "✅ User 'nandur-agent' created successfully"
}

# Function to setup SSH
setup_ssh() {
    echo "🔐 Setting up SSH for nandur-agent..."

    # Switch to user and generate key
    sudo -u nandur-agent bash -c '
        ssh-keygen -t rsa -b 4096 -C "nandur-agent@portfolio" -f ~/.ssh/id_rsa -N ""
        cat ~/.ssh/id_rsa.pub >> ~/.ssh/authorized_keys
        chmod 600 ~/.ssh/authorized_keys
    '

    echo "✅ SSH key generated for nandur-agent"
    echo "📋 Public key for deployment:"
    sudo cat /home/nandur-agent/.ssh/id_rsa.pub
}

# Function to clean server
clean_server() {
    echo "🧹 Cleaning server from old projects..."

    # Stop services
    sudo systemctl stop apache2 2>/dev/null || true
    sudo systemctl stop mysql 2>/dev/null || true

    # Remove old web files
    sudo rm -rf /var/www/html/*
    sudo rm -rf /var/www/*

    # Remove old packages if any
    sudo apt remove --purge -y mysql-server mysql-client 2>/dev/null || true
    sudo apt autoremove -y
    sudo apt autoclean

    echo "✅ Server cleaned"
}

# Function to install software
install_software() {
    echo "📦 Installing required software..."

    sudo apt update && sudo apt upgrade -y

    # Install Apache, PHP, SQLite
    sudo apt install -y apache2 php php-sqlite3 php-mbstring php-xml php-curl php-zip php-gd unzip curl

    # Install Composer
    curl -sS https://getcomposer.org/installer | php
    sudo mv composer.phar /usr/local/bin/composer
    sudo chmod +x /usr/local/bin/composer

    # Enable Apache modules
    sudo a2enmod rewrite
    sudo systemctl enable apache2

    echo "✅ Software installed"
}

# Function to configure Apache
configure_apache() {
    echo "🌐 Configuring Apache..."

    # Create portfolio directory
    sudo mkdir -p /var/www/portfolio
    sudo chown -R www-data:www-data /var/www/portfolio
    sudo chmod -R 755 /var/www/portfolio

    # Create virtual host
    sudo tee /etc/apache2/sites-available/portfolio.conf > /dev/null <<EOF
<VirtualHost *:80>
    ServerName _default_
    DocumentRoot /var/www/portfolio

    <Directory /var/www/portfolio>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog \${APACHE_LOG_DIR}/portfolio_error.log
    CustomLog \${APACHE_LOG_DIR}/portfolio_access.log combined
</VirtualHost>
EOF

    # Enable site
    sudo a2ensite portfolio.conf
    sudo a2dissite 000-default.conf
    sudo systemctl reload apache2

    echo "✅ Apache configured"
}

# Function to setup Laravel
setup_laravel() {
    echo "🎯 Setting up Laravel backend..."

    # Create backend directory
    sudo mkdir -p /var/www/portfolio/backend
    sudo chown -R www-data:www-data /var/www/portfolio/backend

    # Download Laravel project (you'll deploy this later)
    echo "📥 Laravel backend will be deployed via Git"
}

# Function to configure firewall
setup_firewall() {
    echo "🔥 Configuring firewall..."

    sudo ufw --force reset
    sudo ufw allow OpenSSH
    sudo ufw allow 'Apache Full'
    sudo ufw --force enable

    echo "✅ Firewall configured"
}

# Function to show status
show_status() {
    echo ""
    echo "🎉 Setup Complete!"
    echo "=============================="
    echo "🌐 Portfolio URL: http://146.190.87.175"
    echo "👤 User created: nandur-agent"
    echo "🔑 SSH Key generated for deployment"
    echo ""
    echo "📋 Next steps:"
    echo "1. Copy the SSH public key above for deployment"
    echo "2. From local machine: ./deploy.sh"
    echo "3. Test: curl http://146.190.87.175"
    echo ""
    echo "🔐 Security notes:"
    echo "- Change default passwords"
    echo "- Consider SSL certificate"
    echo "- Regular backups"
}

# Main execution
echo "Starting automated setup..."
create_user
setup_ssh
clean_server
install_software
configure_apache
setup_laravel
setup_firewall
show_status

echo "Setup finished! Please copy the SSH key above."