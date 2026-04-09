#!/bin/bash
echo "Deploying..."
composer install --no-dev 2>/dev/null || true
php artisan cache:clear 2>/dev/null || true
echo "Deploy complete at $(date)"
