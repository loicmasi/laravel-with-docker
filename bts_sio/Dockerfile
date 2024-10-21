FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unixodbc-dev \
    gnupg2 \
    libxml2-dev \
    libpq-dev \
    libssl-dev \
    libpng-dev \
    libzip-dev \
    nano \
    zip \
    unzip \
    curl # Ajout de curl pour télécharger Composer

# Install SQL Server drivers
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - && \
    curl https://packages.microsoft.com/config/debian/10/prod.list > /etc/apt/sources.list.d/mssql-release.list && \
    apt-get update && ACCEPT_EULA=Y apt-get install -y msodbcsql17 mssql-tools unixodbc-dev && \
    pecl install sqlsrv pdo_sqlsrv && \
    docker-php-ext-enable sqlsrv pdo_sqlsrv

# Other PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    composer install

# Copy application source code to the container
COPY . /var/www/app

# Set working directory
WORKDIR /var/www/app

RUN cp .env.exemple .env \
    php artisan key:generate \
    php artisan migrate

# Set file ownership
RUN chown -R www-data:www-data /var/www/app

# Expose the necessary port
EXPOSE 9000