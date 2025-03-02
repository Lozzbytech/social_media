#!/bin/bash
set -e

# Generate an app key if it doesn't exist
php artisan key:generate --force

# Clear any previous cache
php artisan config:clear
php artisan cache:clear

# Run migrations
php artisan migrate --force

# Optimize the application
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Apache in foreground
apache2-foreground
