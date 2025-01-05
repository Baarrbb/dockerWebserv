
FROM debian:stable

RUN apt update -y && apt install -y nginx

# COPY ./conf/test.conf /etc/nginx/nginx.conf
COPY ./conf/error.conf /etc/nginx/nginx.conf

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]
