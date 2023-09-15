# Add values to config file.
sed -i -r "s/database_name_here/$SQL_DATABASE/1" /var/www/wordpress/wp-config.php
sed -i -r "s/username_here/$SQL_USER/1" /var/www/wordpress/wp-config.php
sed -i -r "s/password_here/$SQL_PASSWORD/1" /var/www/wordpress/wp-config.php
sed -i -r "s/localhost/$SQL_HOST/1" /var/www/wordpress/wp-config.php

wp core install --url=bsilva-c.42.fr\
				--title="Just another website" \
				--admin_user=$WP_ADMIN_USER \
				--admin_password=$WP_ADMIN_PASSWORD \
				--admin_email=$WP_ADMIN_EMAIL \
				--skip-email \
				--path='/var/www/wordpress' \
				--allow-root
wp user create $WP_USER $WP_USER_EMAIL \
				--user_pass=$WP_USER_PASSWORD \
				--role=author \
				--path='/var/www/wordpress' \
				--allow-root
/usr/sbin/php-fpm7.4 -F