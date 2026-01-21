# Web Static Files

This directory contains static frontend files served by Nginx:

## Structure

```
web/
├── index.html     # Main portfolio page
├── assets/        # CSS, JS, fonts
│   ├── css/
│   ├── js/
│   ├── bootstrap/
│   └── image/
└── image/         # Portfolio images (optional, can be in assets)
```

## Nginx Serving

Nginx container mounts this directory as:
```
volumes:
  - ./web:/var/www/html:ro
```

The `:ro` flag means read-only for security.

## Notes

- Static files only (HTML, CSS, JS, images)
- No server-side processing (except Laravel API via PHP-FPM)
- Laravel public assets mounted separately to `/var/www/laravel/public`
