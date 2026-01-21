# Docker Services Directory

This directory contains all Docker-related configuration and build files organized by service:

## Structure

```
services/
├── nginx/          # Reverse proxy configuration
│   ├── conf.d/    # Nginx site configs
│   └── ssl/       # SSL certificates
├── php/           # PHP-FPM Dockerfile
├── flask/         # Flask Dockerfile
└── mysql/         # MySQL configuration
    └── init/      # Database initialization scripts
```

## Usage

Each service directory contains:
- **Dockerfile**: Build instructions for custom images
- **Config files**: Service-specific configuration
- **Init scripts**: Initialization or setup scripts

## Best Practices

1. **Separation of Concerns**: Each service has its own directory
2. **Immutable Infrastructure**: Dockerfiles define exact environment
3. **Configuration as Code**: All configs versioned in Git
4. **Security**: Secrets managed via .env (not committed)
