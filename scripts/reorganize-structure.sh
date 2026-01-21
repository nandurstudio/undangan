#!/bin/bash
# Reorganize directory structure for Docker best practices

set -e

echo "=== Reorganizing Directory Structure ==="

# Create new directory structure
echo "Creating organized directories..."
mkdir -p services/{nginx/{conf.d,ssl},php,flask,mysql/init}
mkdir -p apps/{laravel,flask}
mkdir -p web/{assets,image}

# Move nginx config
echo "Moving nginx configs..."
if [ -d "nginx" ]; then
  cp -r nginx/conf.d/* services/nginx/conf.d/ 2>/dev/null || true
  cp -r nginx/ssl/* services/nginx/ssl/ 2>/dev/null || true
fi

# Move Dockerfiles
echo "Moving Dockerfiles..."
if [ -d "docker/php" ]; then
  cp docker/php/Dockerfile services/php/
fi
if [ -d "docker/flask" ]; then
  cp docker/flask/Dockerfile services/flask/
fi

# Move static web files
echo "Moving static files..."
cp -r assets/* web/assets/ 2>/dev/null || true
cp -r assets/image/* web/image/ 2>/dev/null || true
cp index.html web/ 2>/dev/null || true

# Move Laravel (backend will be copied from server)
if [ -d "backend" ]; then
  echo "Backend directory exists, will be handled during deployment..."
fi

# Move Flask app
echo "Moving Flask app..."
if [ -d "flask" ]; then
  cp -r flask/* apps/flask/
fi

# Create .gitkeep for empty directories
touch services/mysql/init/.gitkeep

echo "✅ Directory reorganization complete!"
echo ""
echo "New structure:"
tree -L 2 -I 'node_modules|vendor' || ls -R
