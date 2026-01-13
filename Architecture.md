# Portfolio Architecture Documentation

## Overview
This document outlines the architecture of Nandang Duryat's personal portfolio website, transitioning from a static HTML/CSS/JS site to a dynamic web application with backend capabilities. The goal is to support features like dynamic contact forms, blog/articles management, and an admin panel for content management.

## Current Architecture (Static)
- **Frontend**: Pure HTML5, CSS3, JavaScript (ES6+)
- **Libraries**: Bootstrap 4, jQuery, WOW.js for animations
- **Structure**:
  - `index.html`: Main page with all sections
  - `assets/css/`: Stylesheets (style.css, mobile.css, etc.)
  - `assets/js/`: JavaScript files (main.js for custom logic, libraries)
  - `assets/image/`: Static images
- **Features**:
  - Typing effect for name/role
  - Portfolio filter and modals
  - Contact form (currently static, sends via PHP mail)
  - Responsive design

## Planned Dynamic Features
1. **Contact Form Enhancements**:
   - Store messages in database
   - Admin panel to view/manage messages
   - Email notifications

2. **Dynamic Articles/Blog**:
   - CRUD operations for articles
   - Categories and tags
   - Search and pagination
   - Rich text editor (e.g., TinyMCE)

3. **Portfolio Management**:
   - Dynamic project addition/editing
   - Image upload and management

4. **Admin Panel**:
   - Authentication (login/logout)
   - Dashboard with analytics
   - Content management interface

5. **Additional Features**:
   - User testimonials management
   - Skills/experience dynamic updates
   - Newsletter subscription

## Recommended Technology Stack
### Backend
- **Language**: PHP 8+ or Node.js (Express.js)
- **Framework**: Laravel (PHP) for rapid development, or Express.js (Node.js) for flexibility
- **Database**: MySQL or PostgreSQL for relational data, MongoDB for NoSQL if needed
- **Authentication**: Laravel Sanctum or JWT for API

### Frontend Enhancements
- **JavaScript Framework**: Vue.js or React for dynamic components (optional, keep static for simplicity)
- **AJAX**: Fetch API or Axios for dynamic content loading
- **Build Tools**: Webpack or Vite for asset management

### Hosting & Deployment
- **Web Server**: Apache/Nginx
- **Hosting**: Shared hosting (cPanel) or VPS (DigitalOcean, AWS)
- **Version Control**: Git (already initialized)
- **CI/CD**: GitHub Actions for automated deployment

## Proposed Folder Structure
```
folioflix/
├── public/                 # Web-accessible files
│   ├── index.php          # Main entry point (if using PHP)
│   ├── assets/            # Static assets (CSS, JS, images)
│   └── uploads/           # User-uploaded files
├── src/                   # Source code
│   ├── controllers/       # Business logic
│   ├── models/            # Database models
│   ├── views/             # Templates (Blade for Laravel)
│   ├── routes/            # API routes
│   └── middleware/        # Authentication, etc.
├── config/                # Configuration files
├── database/              # Migrations, seeds
├── tests/                 # Unit/Feature tests
├── vendor/                # Dependencies (Composer for PHP)
├── .env                   # Environment variables
├── composer.json          # PHP dependencies
├── package.json           # Node.js dependencies (if needed)
├── webpack.mix.js         # Asset compilation
└── README.md
```

## Database Schema (Example for MySQL)
```sql
-- Messages table
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Articles table
CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    content TEXT NOT NULL,
    excerpt TEXT,
    category_id INT,
    tags JSON,
    image VARCHAR(255),
    published BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Categories table
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL
);

-- Users table (for admin)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'editor') DEFAULT 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## API Endpoints (Example)
- `GET /api/messages` - Fetch messages (admin only)
- `POST /api/messages` - Submit contact form
- `GET /api/articles` - Fetch published articles
- `POST /api/articles` - Create article (admin)
- `PUT /api/articles/{id}` - Update article
- `DELETE /api/articles/{id}` - Delete article

## Security Considerations
- Input validation and sanitization
- CSRF protection
- SQL injection prevention (prepared statements)
- File upload security (type, size limits)
- HTTPS enforcement
- Rate limiting for forms

## Performance Optimizations
- Caching (Redis or file-based)
- Image optimization (WebP, lazy loading)
- Minification of CSS/JS
- Database indexing
- CDN for static assets

## Development Roadmap
1. **Phase 1**: Set up backend framework (Laravel/Node.js)
2. **Phase 2**: Implement contact form with database storage
3. **Phase 3**: Build admin panel for message management
4. **Phase 4**: Add article/blog system
5. **Phase 5**: Integrate dynamic portfolio management
6. **Phase 6**: Testing, security audit, and deployment

## Migration Plan
- Keep existing static files as fallback
- Gradually replace static content with dynamic data
- Use feature flags to enable/disable new features
- Backup all data before migration

## Testing Strategy
- Unit tests for models and controllers
- Feature tests for API endpoints
- Browser testing for frontend interactions
- Load testing for performance

## Maintenance
- Regular updates for dependencies
- Monitoring (error logs, analytics)
- Backup strategy (database and files)
- SEO monitoring and updates

This architecture provides a scalable foundation for expanding the portfolio into a full-featured web application with admin capabilities.