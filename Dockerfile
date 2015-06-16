FROM daocloud.io/robychen/apache2-php5:master-init 
COPY src/ /var/www/html
WORKDIR /var/www/html

ADD httpd.conf /etc/apache2/sites-enabled/000-default.conf
#ADD php.ini /etc/php5/apache2/php.ini

RUN chmod -R 777 /var/www/html/app/cache
RUN chmod -R 777 /var/www/html/app/logs
#RUN cd /var/www/html
#RUN php app/console cache:clear