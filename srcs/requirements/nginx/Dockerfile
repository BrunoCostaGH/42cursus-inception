FROM debian:bullseye
EXPOSE 443

RUN apt update
RUN apt upgrade -y

# Install NGINX
RUN apt install nginx -y

# Install TLS certificate
RUN mkdir -p /etc/ssl
RUN apt install openssl -y
RUN openssl req -x509 -nodes -sha256 -newkey rsa:4096 -out /etc/ssl/inception.crt -keyout /etc/ssl/inception.key -subj /C=PT/ST=Porto/L=Porto/O=42/OU=42Porto=bsilva-c.42.fr/UID=bsilva-c

# Configure NGINX
RUN mkdir -p /var/run/nginx
COPY ./conf/nginx.conf /etc/nginx/

# Set permissions to website
RUN chmod 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html

CMD ["nginx", "-g", "daemon off;"]