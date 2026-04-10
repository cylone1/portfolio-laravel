#!/bin/bash

set -e

BASE_DIR="/var/www"
RELEASES_DIR="$BASE_DIR/releases"
CURRENT_DIR="$BASE_DIR/current"


NEW_RELEASE="$RELEASES_DIR/$(date +%Y%m%d%H%M%S)"

echo "🚀 Deploying new release: $NEW_RELEASE"


git clone git@github.com:cylone1/portfolio-laravel.git $NEW_RELEASE

cd $NEW_RELEASE
ln -sfn /var/www/shared/.env .env
# hapus storage default
rm -rf storage

# link ke shared
ln -sfn /var/www/shared/storage storage

composer install --no-dev --optimize-autoloader

php artisan config:clear
php artisan cache:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache

php artisan migrate --force

ln -sfn $NEW_RELEASE $CURRENT_DIR

echo "✅ Deploy success!"
