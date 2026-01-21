# Project Structure

## Portfolio FolioFlix - Organized Structure

```
folioflix/
├── 📁 .github/              # GitHub workflows & copilot instructions
│   └── copilot-instructions.md
│
├── 📁 apps/                 # Microservices applications
│   ├── flask/              # Flask API service
│   └── README.md
│
├── 📁 assets/               # Frontend static assets
│   ├── bootstarp/          # Bootstrap CSS
│   ├── css/                # Stylesheets
│   ├── image/              # Portfolio images
│   └── js/                 # JavaScript files
│
├── 📁 backend/              # Laravel API backend
│   ├── app/                # Laravel application code
│   ├── config/             # Configuration files
│   ├── database/           # Migrations & seeders
│   ├── routes/             # API routes
│   └── ...
│
├── 📁 docker/               # Custom Dockerfiles
│   ├── flask/
│   └── php/
│
├── 📁 docs/                 # 📚 All documentation
│   ├── README.md           # Main documentation
│   ├── Architecture.md     # (missing - needs to be added)
│   ├── SourceOfTruth.md    # Project state reference
│   ├── CONFIG-SYNC-STATUS.md
│   ├── DEPLOYMENT-STATUS.md
│   ├── DOCKER-DEPLOYMENT.md
│   ├── N8N-SETUP-GUIDE.md
│   ├── NGINX-N8N-CONFIG.md
│   ├── SSH-Port-ISP-Blocking-Explanation.md
│   ├── DOC-UPDATE-SUMMARY.md
│   ├── fortpolio_nandur.json
│   └── legacy-contact-form.php
│
├── 📁 flask/                # (Deprecated - use apps/flask/)
│
├── 📁 nginx-configs/        # Backup nginx configurations
│   └── docker-compose.yml.server-backup
│
├── 📁 scripts/              # 🔧 Deployment & setup scripts
│   ├── complete-setup.sh   # (missing - needs to be added)
│   ├── deploy-docker.sh
│   ├── deploy.sh
│   ├── reorganize-structure.sh
│   └── server-setup.sh
│
├── 📁 services/             # Docker service configurations
│   ├── flask/
│   ├── mysql/
│   ├── nginx/
│   │   └── conf.d/
│   │       └── default.conf  # Active nginx config
│   └── php/
│
├── 📁 web/                  # Production web root
│   ├── index.html
│   └── assets/
│
├── 📄 docker-compose.yml    # Main Docker orchestration
├── 📄 index.html            # Frontend entry point
├── 📄 LICENSE               # MIT License
├── 📄 .env.docker.example   # Environment template
└── 📄 .gitignore            # Git ignore rules
```

## Directory Purposes

### Core Application
- **`/` (root)**: Essential files only (docker-compose.yml, index.html, LICENSE)
- **`assets/`**: Frontend static files (CSS, JS, images)
- **`backend/`**: Laravel API backend
- **`apps/`**: Microservices (Flask, future services)

### Infrastructure
- **`docker/`**: Custom Dockerfiles for building images
- **`services/`**: Docker service configurations (nginx, php, mysql, flask)
- **`web/`**: Production web root (mapped to nginx container)

### Development & Ops
- **`docs/`**: All documentation (*.md files, legacy files)
- **`scripts/`**: Deployment & setup shell scripts
- **`nginx-configs/`**: Backup configurations

### Configuration Files
- **`docker-compose.yml`**: Container orchestration (6 services)
- **`.env.docker.example`**: Environment variables template
- **`.gitignore`**: Git ignore rules

## Quick Navigation

### For Documentation
```bash
cd docs/
cat README.md              # Main docs
cat SourceOfTruth.md       # Project state
cat N8N-SETUP-GUIDE.md     # n8n setup
```

### For Deployment
```bash
cd scripts/
./deploy.sh                # Deploy to production
./server-setup.sh          # Initial server setup
```

### For Development
```bash
# Frontend
cd assets/

# Backend API
cd backend/

# Flask microservices
cd apps/flask/

# Docker configs
cd services/nginx/conf.d/
```

## File Counts by Category

| Category | Count | Description |
|----------|-------|-------------|
| Documentation | 11 files | All .md docs + legacy files |
| Scripts | 4 files | Deployment & setup scripts |
| Root files | 5 files | Essential project files only |
| Folders | 11 folders | Organized by purpose |

## Cleanup Notes

**Moved from root to organized folders:**
- ✅ 11 documentation files → `docs/`
- ✅ 4 shell scripts → `scripts/`
- ✅ 1 legacy PHP file → `docs/legacy-contact-form.php`
- ✅ 1 JSON config → `docs/fortpolio_nandur.json`
- ✅ nginx backup configs → `nginx-configs/`

**Remaining in root (by design):**
- `docker-compose.yml` - Standard location for Docker Compose
- `index.html` - Main frontend entry point
- `LICENSE` - Repository license file
- `.env.docker.example` - Environment template
- `.gitignore` - Git configuration

---

**Last Updated:** January 21, 2026  
**Maintainer:** Nandang Duryat
