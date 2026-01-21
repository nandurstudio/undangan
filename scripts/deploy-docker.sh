#!/bin/bash
# Docker Stack Deployment Script
# This script deploys the Docker stack to the production server

set -e

echo "=== Docker Stack Deployment ==="

# Configuration
REMOTE_USER="root"
REMOTE_HOST="146.190.87.175"
REMOTE_DIR="/opt/stack"
LOCAL_DIR="."

echo "1. Copying files to droplet..."
rsync -avz --exclude='vendor' --exclude='node_modules' --exclude='.git' \
  ${LOCAL_DIR}/ ${REMOTE_USER}@${REMOTE_HOST}:${REMOTE_DIR}/

echo "2. Setting up environment on droplet..."
ssh ${REMOTE_USER}@${REMOTE_HOST} << 'ENDSSH'
cd /opt/stack

# Copy env example if .env doesn't exist
if [ ! -f .env ]; then
  echo "Creating .env from example..."
  cp .env.docker.example .env
  echo "⚠️  Please edit /opt/stack/.env with your actual values!"
fi

# Create necessary directories
mkdir -p nginx/ssl

echo "✅ Files deployed successfully"
ENDSSH

echo ""
echo "=== Next Steps ==="
echo "1. SSH to droplet: ssh portfolio-droplet"
echo "2. Edit environment: nano /opt/stack/.env"
echo "3. Build images: cd /opt/stack && docker compose build"
echo "4. Start services: docker compose up -d"
echo ""
