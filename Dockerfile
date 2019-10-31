FROM php:7.2-apache

COPY ./index.php /var/www/html
RUN apt-get update -y && apt-get install nginx -y
COPY ./default /etc/nginx/sites-available
RUN service start nginx

EXPOSE 8888