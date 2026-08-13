#!/bin/sh

# Wait for database to be ready (if using external database)
# For SQLite, just ensure the file exists and has proper permissions

# Run migrations
php artisan migrate --force

# Clear and cache config
php artisan config:clear
php artisan config:cache

# Start the main process
exec "$@"
