FROM debian:stable

RUN apt update -y && apt install -y php8.2-fpm

COPY ./conf/www.conf /etc/php/8.2/fpm/pool.d/www.conf
COPY ./conf/php.ini /etc/php/8.2/fpm/php.ini
COPY ./www/ /var/www/test/
COPY ./blbl/ /var/www/blbl/
COPY ./dataViz/ /var/www/dataViz/

RUN chown -R www-data:www-data /var/www/test

CMD ["php-fpm8.2", "-F", "-y", "/etc/php/8.2/fpm/php-fpm.conf"]
