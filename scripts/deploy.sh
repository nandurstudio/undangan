#!/bin/bash

# Deployment script for portfolio project (Windows compatible)
# Usage: .\deploy.sh

# Configuration for production
SERVER="146.190.87.175"  # Your DigitalOcean droplet IP
BRANCH="prod"
REMOTE_PATH="/var/www/portfolio"
SSH_KEY="$USERPROFILE\.ssh\nandur-agent-key"

echo "Deploying $BRANCH to production server ($SERVER)..."

# Build frontend if needed (for production)
echo "Building for production..."
# Add build commands if needed

# Check if running on Windows
if [[ "$OSTYPE" == "msys" ]] || [[ "$OSTYPE" == "win32" ]]; then
    echo "Running on Windows - using scp..."

    # Windows: Use scp with exclusions
    echo "Uploading files..."
    scp -i "$SSH_KEY" -r \
        -o StrictHostKeyChecking=no \
        -o UserKnownHostsFile=/dev/null \
        . "nandur-agent@$SERVER:$REMOTE_PATH/"

else
    # Linux/Mac: Use rsync
    echo "Running on Linux/Mac - using rsync..."
    rsync -avz --delete --exclude='.git' --exclude='node_modules' --exclude='.env' \
        . "nandur-agent@$SERVER:$REMOTE_PATH/"
fi

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