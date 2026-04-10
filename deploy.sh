#!/bin/bash
set -e
echo "Deploying v1.5.0..."
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan cache:clear
php artisan config:cache
php artisan route:cache
php artisan queue:restart
echo "Deploy v1.5.0 complete at $(date)"
