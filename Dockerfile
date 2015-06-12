FROM php:5.6-apache
COPY src/ /var/www/html

ADD httpd.conf /etc/apache2/sites-enabled/000-default.conf