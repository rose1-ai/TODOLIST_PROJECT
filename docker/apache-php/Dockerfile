FROM php:8.2-apache


RUN a2enmod rewrite


COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf


COPY . /var/www/html


RUN docker-php-ext-install mysqli


CMD ["apache2-foreground"]