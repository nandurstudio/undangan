#!/bin/bash

# Deployment script for portfolio project
# Usage: ./deploy.sh

# Configuration for production
SERVER="146.190.87.175"  # Your DigitalOcean droplet IP
BRANCH="prod"
REMOTE_PATH="/var/www/portfolio"

echo "Deploying $BRANCH to production server ($SERVER)..."

# Build frontend if needed (for production)
echo "Building for production..."
# Add build commands if needed

# Deploy using rsync
rsync -avz --delete --exclude='.git' --exclude='node_modules' --exclude='.env' \
    . $SERVER:$REMOTE_PATH/

# Run post-deployment commands on server
ssh $SERVER << EOF
    cd $REMOTE_PATH
    if [ "$ENVIRONMENT" = "dev" ]; then
        # Development server commands
        echo "Development deployment complete"
    elif [ "$ENVIRONMENT" = "prod" ]; then
        # Production server commands
        echo "Production deployment complete"
    fi
EOF

echo "Deployment to $ENVIRONMENT complete!"