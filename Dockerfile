FROM php:5.6-apache
COPY src/ /var/www/

ADD http.conf /etc/apache2/sites-enabled/000-default.conf