# FROM php:8.1-fpm-alpine

# WORKDIR /var/www/html

# COPY . /var/www/html

# EXPOSE 9000

# CMD ["php", "-S", "0.0.0.0:9000"]



FROM php:8.1-fpm-alpine

RUN apk --update add --no-cache postgresql-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

WORKDIR /var/www/html

COPY . /var/www/html

EXPOSE 9000

CMD ["php", "-S", "0.0.0.0:9000"]







# FROM alpine:3.17

# # Update package repository index


# # Install Nginx
# RUN apk --no-cache add nginx

# # Configure Nginx
# COPY nginx.conf /etc/nginx/conf.d/

# # Set up PHP-FPM
# COPY php-fpm.conf /usr/local/etc/php-fpm.d/

# WORKDIR /var/www/html

# COPY . /var/www/html

# EXPOSE 80

# CMD ["sh", "-c", "nginx -g 'daemon off;' & php-fpm"]
