FROM php:8.2-apache

# Enable Apache modules and PHP extensions if needed
RUN a2enmod rewrite

# Copy Apache configuration if you have any customizations
# COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# The application code will be mounted from the host
# at runtime, so no need to COPY it here

# Apache serves from /var/www/html/ by default
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80

# Apache starts automatically with this base image, no need for CMD