# Wedding — Fully Responsive HTML5 Bootstrap Template

**Admin module (`admin/`)** — The KKM RAT admin/dashboard (previously a separate `kkmrat` project) has been merged into this repository under `admin/`. Use `admin/` as the canonical location for the dashboard; the original standalone project has been archived or merged.

**Source & credits**

This project uses a free HTML5 template adapted for the KKM RAT invitation site.

- Template: GetTemplates.co — *Wedding* (fully responsive)
- Libraries used:
  - Bootstrap
  - jQuery
  - jQuery Easing
  - Modernizr
  - Owl Carousel
  - Stellar (parallax)
  - Magnific Popup
  - SimplyCountdown
  - animate.css
  - Icomoon

Demo images: https://unsplash.com

---

## Environment & deployment (undangan)

**Overview**
- Production must supply required environment variables. For local development the app will use safe fallbacks so you can run quickly.
- Do **not** commit any real secrets. Use `undangan/.env.sample` as a template and create `undangan/.env` on the server or inject vars via Docker/systemd/nginx.

### Required environment variables (production)
| Variable | Description | Example |
|---|---:|---|
| `DB_HOST` | MySQL host | `127.0.0.1` or `mysql` |
| `KKMRAT_DB_USER` | Database user used by the app | `kkmrat_user` |
| `KKMRAT_DB_PASS` | Database password (may be empty only if intentionally blank) | `s3cret` |
| `KKMRAT_DB_NAME` | Database name | `db_undangan_rat` |
| `KKMRAT_AES_KEY` | Application AES key (random string) | `V1s2G3...` |

> The application will fail-fast in production if required variables are missing.

### How to set environment variables
- Docker Compose (example snippet in `docker-compose.yml`):

```yaml
services:
  php:
    environment:
      - KKMRAT_DB_USER=${KKMRAT_DB_USER}
      - KKMRAT_DB_PASS=${KKMRAT_DB_PASS}
      - KKMRAT_DB_NAME=${KKMRAT_DB_NAME}
      - DB_HOST=${DB_HOST}
```

- Apache (virtual host):

```apache
SetEnv KKMRAT_DB_USER kkmrat_user
SetEnv KKMRAT_DB_PASS "secret"
```

- Systemd service file (EnvironmentFile):

```ini
EnvironmentFile=/opt/stack/.env.undangan
```

- Local (Laragon / dev): copy `undangan/.env.sample` → `undangan/.env` and edit values.

### `.env.sample`
Use `.env.sample` as a commit-friendly template (no secrets). Copy it into `.env` on each environment and populate values.

### Testing & smoke checks
- Local dev server (quick):
  - `php -S 127.0.0.1:9001 router.php`
  - `curl -sS http://127.0.0.1:9001/tmp_test_db.php` → `CONNECT_OK`
  - visit `http://127.0.0.1:9001/admin.php` and `http://127.0.0.1:9001/liveguestcount`
- Docker: `docker compose up -d && docker compose logs -f php`

### Failure behavior (production)
- If DB is unavailable in production the app returns a friendly **503 Service temporarily unavailable** HTML page and logs a short reference code for support (see `undangan/php/connection.php`).

### Security & deployment notes
- Keep `.env` files out of Git (`.gitignore` updated). Use strong, unique passwords and rotate keys when needed.
- On Linux set secure permissions: `chmod 640 /path/to/.env` and restrict ownership to the service user.

---



---

## Project structure (selected)

- `php/` — all server-side PHP pages and API endpoints (single source of truth)
- root PHP files have been migrated to `php/` — root now only contains `index.php`, router files and static assets
- `backups/` — previous root copies (kept for safe rollback)

---

## Local development notes

- Start a local PHP server for dev/testing (example):

```bash
cd undangan
php -S 127.0.0.1:9001 router.php
```

- Use `tmp_test_db.php` to validate DB connectivity before running pages that need the DB.

---

## Support

If an error persists in production, contact `founder@nandurstudio.com` and include any reference code shown on the error page.

---

(Generated from original README.txt)