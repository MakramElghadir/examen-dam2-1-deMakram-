# Use the official PHP image with Apache
FROM php:7.4-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the index.php file into the container's working directory
COPY index.php /var/www/html/

# Expose port 60 (Apache will now listen on this port)
EXPOSE 80
