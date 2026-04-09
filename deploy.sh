#!/bin/bash
set -e
echo "Deploying v1.1.0..."
composer install --no-dev
php artisan migrate --force
php artisan cache:clear
php artisan config:cache
php artisan route:cache
echo "Deploy v1.1.0 complete at $(date)"
