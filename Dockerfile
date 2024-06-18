FROM php:8.2

RUN apt-get update && upt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo_mysql abstring

# Set the working directory to /app
WORKDIR /app

# Copy the package.json and package-lock.json files to /app
COPY composer.json .

# Install dependencies
RUN composer install --no-scripts

# Copy the rest of the application code to /app
COPY . .

# Start the server
CMD php artisan serve --host=0.0.0.0 --port 80
