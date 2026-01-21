# Applications Directory

This directory contains application code for all services:

## Structure

```
apps/
├── laravel/       # Laravel backend (PHP)
│   ├── app/
│   ├── config/
│   ├── database/
│   ├── public/
│   └── ...
└── flask/         # Flask API (Python)
    ├── app.py
    ├── requirements.txt
    └── ...
```

## Notes

- **laravel/**: Full Laravel application code (backend)
- **flask/**: Python Flask API application
- Each app is bind-mounted during development for live reload
- Production: code copied into image during build

## Deployment

On server deployment:
1. Copy existing `/var/www/portfolio` → `/opt/stack/apps/laravel`
2. Ensure `.env` is configured correctly for Docker (DB_HOST=db)
3. Install dependencies via Docker containers
