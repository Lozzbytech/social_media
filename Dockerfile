FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    supervisor

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install dependencies
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Generate key and cache configs
RUN php artisan key:generate --force || true
RUN php artisan config:cache || true
RUN php artisan route:cache || true
RUN php artisan view:cache || true

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Configure Nginx - the key change is listening on $PORT
COPY nginx.conf /etc/nginx/sites-available/laravel
RUN sed -i 's/listen 80/listen $PORT/g' /etc/nginx/sites-available/laravel
RUN ln -s /etc/nginx/sites-available/laravel /etc/nginx/sites-enabled/
RUN rm -f /etc/nginx/sites-enabled/default

# Configure Supervisor
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Start Supervisor (which manages Nginx and PHP-FPM)
CMD ["/bin/bash", "-c", "envsubst '$$PORT' < /etc/nginx/sites-available/laravel > /etc/nginx/sites-enabled/laravel && /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf"]
