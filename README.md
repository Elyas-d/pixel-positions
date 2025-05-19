# 💼 Pixel Positions — Job Search Portal

> A blazing-fast, beautifully crafted platform where employers post jobs and seekers discover opportunities with powerful search and tagging.

![Laravel](https://img.shields.io/badge/built%20with-Laravel-red)
![UI](https://img.shields.io/badge/UI-Blade%20Components-purple)
![Status](https://img.shields.io/badge/status-active-brightgreen)
![Security](https://img.shields.io/badge/security-high-important)

---

## ✨ Features

- 🔍 **Smart Search & Tag Filtering** – Quickly find relevant jobs using tags and keywords.
- 🎨 **Sleek UI** – Built using Blade components for consistent and elegant design.
- ⚡ **Ultra-fast** – Optimized for speed with Laravel and modern tooling.
- 🔒 **Secure** – Implements Laravel’s best practices for authentication and protection.
- 🖥️ **Responsive Design** – Looks great on all screen sizes.

---

## 🛠️ Tech Stack

**Frontend:** Laravel Blade, Tailwind CSS  
**Backend:** Laravel (PHP 8.x)  
**Database:** 
- 🧪 Development: SQLite  
- 🚀 Production: PostgreSQL  
**Others:** Laravel Sanctum, Laravel Scout, Laravel Mix

---

## 🚀 Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- SQLite for development or PostgreSQL for production
- Node.js & npm

### Installation

```bash
git clone https://github.com/yourusername/pixel-positions.git
cd pixel-positions

# Install PHP & JS dependencies
composer install
npm install && npm run dev

# Setup environment
cp .env.example .env
php artisan key:generate

# Configure DB (SQLite for dev)
touch database/database.sqlite
# Then in .env: DB_CONNECTION=sqlite

# Run migrations
php artisan migrate --seed

# Serve the app
php artisan serve
```
🧪 Running Tests
```
php artisan test
```
🔐 Security Highlights

    Secure user authentication (Laravel Sanctum)

    Password encryption

    Input validation/sanitization

    Rate limiting on key endpoints

📈 Roadmap / Planned Features

- Candidate profile pages

- Apply to job functionality

- Employer dashboards

- Admin panel

- Email notifications & scheduling

- Social login (GitHub, Google)

🤝 Contributing

Contributions are welcome! To get started:

    Fork the repo

    Create a new branch

    Commit your changes

    Open a Pull Request

Please follow the Code of Conduct and open an issue for major changes.

💬 Contact

Author: Elyas Damenu
Email: elyasdamenu@gmail.com
GitHub: @Elyas-d

> Designed with ❤️ using Laravel — because job hunting should be fast, smooth, and beautiful.
