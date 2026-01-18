#!/bin/bash

# Deployment script for portfolio project
# Usage: ./deploy.sh [dev|prod]

ENVIRONMENT=$1
if [ "$ENVIRONMENT" != "dev" ] && [ "$ENVIRONMENT" != "prod" ]; then
    echo "Usage: $0 [dev|prod]"
    exit 1
fi

# Configuration
if [ "$ENVIRONMENT" = "dev" ]; then
    SERVER="your-dev-server-ip"
    BRANCH="dev"
    REMOTE_PATH="/var/www/portfolio-dev"
elif [ "$ENVIRONMENT" = "prod" ]; then
    SERVER="your-prod-server-ip"
    BRANCH="prod"
    REMOTE_PATH="/var/www/portfolio-prod"
fi

echo "Deploying $BRANCH to $ENVIRONMENT server ($SERVER)..."

# Build frontend if needed (for production)
if [ "$ENVIRONMENT" = "prod" ]; then
    echo "Building for production..."
    # Add build commands if needed
fi

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