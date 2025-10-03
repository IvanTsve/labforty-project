
# Lab Forty Project

A Laravel 12 application with Vite and Tailwind CSS integration.

## Requirements

- **PHP**: ^8.2
- **Node.js**: v20.19.5
- **Composer**: Latest version

## Installation

### 1. Clone the repository
```bash
git clone <repository-url>
cd labforty
```

### 2. Install PHP dependencies
```bash
composer install
```

### 3. Install Node.js dependencies
```bash
npm install
```

### 4. Environment setup
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Database setup
```bash
php artisan migrate
```

## Development

### Start development servers

#### Option 1: Run both servers simultaneously (recommended)
```bash
composer run dev
```
This command will start both the Laravel development server and Vite dev server concurrently.

#### Option 2: Run servers separately

**Terminal 1 - Laravel server:**
```bash
php artisan serve
```

**Terminal 2 - Vite dev server:**
```bash
npm run dev
```

## Production Build

To build assets for production:
```bash
npm run build
```

## Available Commands

### PHP/Laravel Commands
- `php artisan serve` - Start Laravel development server
- `php artisan migrate` - Run database migrations
- `php artisan tinker` - Start Laravel REPL
- `composer run dev` - Start both Laravel and Vite servers

### Node.js Commands
- `npm install` - Install Node.js dependencies
- `npm run dev` - Start Vite development server
- `npm run build` - Build assets for production

## Technology Stack

- **Backend**: Laravel 12
- **Frontend**: Vite + Tailwind CSS 4.1.14
- **Package Manager**: Composer (PHP) + npm (Node.js)
- **Build Tool**: Vite 7.0.7

## Project Structure

- `app/` - Laravel application code
- `resources/` - Frontend assets (CSS, JS, Blade templates)
- `public/` - Public web assets
- `routes/` - Application routes
- `database/` - Database migrations and seeders
- `config/` - Configuration files

## About Laravel
