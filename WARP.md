# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Project Overview

This is "App Super Gestão" - a Laravel-based management application for handling suppliers (fornecedores), clients, and products. It's a business management system with both public site pages and private application areas.

## Common Commands

### Development Server
```bash
# Start the development server
php artisan serve

# Start with custom host/port
php artisan serve --host=0.0.0.0 --port=8080
```

### Asset Building (Vite)
```bash
# Development mode with hot reloading
npm run dev

# Build for production
npm run build

# Install frontend dependencies
npm install
```

### Database Operations
```bash
# Run migrations
php artisan migrate

# Reset and re-run all migrations
php artisan migrate:fresh

# Create a new migration
php artisan make:migration create_table_name

# Create a seeder
php artisan make:seeder TableNameSeeder

# Run seeders
php artisan db:seed
```

### Code Generation
```bash
# Create a controller
php artisan make:controller ControllerName

# Create a model with migration
php artisan make:model ModelName -m

# Create a request class for form validation
php artisan make:request RequestName
```

### Testing
```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run specific test method
php artisan test --filter test_method_name

# Generate test coverage report
php artisan test --coverage
```

### Code Quality
```bash
# Format code with Laravel Pint
./vendor/bin/pint

# Format specific files
./vendor/bin/pint app/Http/Controllers/

# Check formatting without fixing
./vendor/bin/pint --test
```

### Artisan Commands
```bash
# List all available artisan commands
php artisan list

# Clear various caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Generate application key (first time setup)
php artisan key:generate
```

## Architecture Overview

### Application Structure
- **Site Area**: Public-facing pages (`/`, `/contato`, `/sobre-nos`, `/login`)
  - Controllers: `PrincipalController`, `ContatoController`, `SobreNosController`
  - Views: `resources/views/site/`
  
- **App Area**: Private management interface (`/app/*`)
  - Suppliers management (`/app/fornecedores`) - `FornecedorController`
  - Clients management (`/app/clientes`) - placeholder route
  - Products management (`/app/produtos`) - placeholder route
  - Views: `resources/views/app/`

### Route Organization
- **Web routes**: All main application routes are in `routes/web.php`
- **Route groups**: App-specific routes are grouped under `/app` prefix
- **Named routes**: All routes use descriptive names (e.g., `site.index`, `app.fornecedores`)
- **Fallback route**: Handles 404 errors with custom message and redirect

### MVC Pattern
- **Models**: Currently minimal, only default `User` model exists
- **Views**: Blade templates organized by section (site/ and app/)
- **Controllers**: Thin controllers focused on returning views
- **Database**: Standard Laravel migrations structure, ready for expansion

### Frontend Setup
- **Vite**: Modern build tool for assets
- **Asset structure**: CSS and JS files in `resources/css/` and `resources/js/`
- **Blade templating**: Simple blade templates without complex layouts yet

## Development Notes

### Current State
This appears to be a Laravel application in early development stages:
- Basic routing and controller structure is established
- View templates are simple and functional
- Database layer is minimal (only default Laravel tables)
- No authentication system implemented yet
- No complex business logic or data relationships

### Areas for Expansion
- User authentication and authorization
- Database models for suppliers, clients, and products
- Form handling and validation
- Business logic implementation
- Advanced blade layouts and components
- API endpoints if needed

### Testing Setup
- PHPUnit configured for both Unit and Feature tests
- Test environment variables configured in `phpunit.xml`
- Example tests available as starting templates