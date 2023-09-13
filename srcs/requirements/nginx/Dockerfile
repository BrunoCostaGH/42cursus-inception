FROM debian:bullseye

RUN apt update

# Install NGINX
RUN apt install nginx -y

# Install TLS certificate
RUN mkdir -p /etc/ssl
RUN apt install openssl -y
RUN openssl req -x509 -nodes -out /etc/ssl/inception.crt -keyout /etc/ssl/inception.key -subj "/C=FR/ST=IDF/L=PARIS/O=42/OU=42CN=bsilva-c.42.fr/UID=bsilva-c"

# Configure NGINX
RUN mkdir -p /var/run/nginx
COPY conf/nginx.conf /etc/nginx/nginx.conf

# Set permissions to website
RUN chmod 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html

CMD ["nginx", "-g", "daemon off;"]