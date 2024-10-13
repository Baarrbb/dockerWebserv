
FROM debian:stable

RUN apt update -y && apt install -y nginx

COPY ./conf/test.conf /etc/nginx/nginx.conf
COPY ./www/ /var/www/test/
COPY ./public/ /var/www/public/

EXPOSE 80

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]
