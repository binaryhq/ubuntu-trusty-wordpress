FROM ubuntu:trusty
MAINTAINER nignappa <ningappa@poweruphosting.com>

# Install packages
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update && \
  apt-get -y install supervisor git apache2 libapache2-mod-php5 mysql-server php5-mysql pwgen php-apc php5-mcrypt 
  
RUN sed -i -e 's/^bind-address\s*=\s*127.0.0.1/#bind-address = 127.0.0.1/' /etc/mysql/my.cnf



ADD uploads/supervisord-apache2.conf /etc/supervisor/conf.d/supervisord-apache2.conf
ADD uploads/supervisord-mysqld.conf /etc/supervisor/conf.d/supervisord-mysqld.conf

# Remove pre-installed database
RUN rm -rf /var/lib/mysql/*

# Add MySQL utils
ADD uploads/create_mysql_admin_user.sh /create_mysql_admin_user.sh
ADD uploads/wordpress.sql /wordpress.sql


# Add image configuration and scripts
ADD uploads/start-apache2.sh /start-apache2.sh
ADD uploads/start-mysqld.sh /start-mysqld.sh
ADD uploads/run.sh /run.sh

RUN chmod 755 /*.sh

# config to enable .htaccess
ADD uploads/apache_default /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Configure /app folder with sample app

ADD https://wordpress.org/latest.tar.gz /var/www/latest.tar.gz
RUN cd /var/www/ && tar xvf latest.tar.gz && rm latest.tar.gz
RUN cp -rf  /var/www/wordpress/* /var/www/html/
RUN rm -rf /var/www/wordpress
RUN rm /var/www/html/index.html
ADD uploads/html /var/www/html
RUN chown -R www-data:www-data /var/www/


ADD uploads/pbn	/usr/share/pbn
RUN chmod 777 /usr/share/pbn/filemanager/config/.htusers.php && \
	echo "IncludeOptional /usr/share/pbn/apache2.conf" >> /etc/apache2/apache2.conf && \
	echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
	rm /var/www/html/index.html
	
#Environment variables to configure php
ENV PHP_UPLOAD_MAX_FILESIZE 10M
ENV PHP_POST_MAX_SIZE 10M

# Add volumes for MySQL 
VOLUME  ["/etc/mysql", "/var/lib/mysql" ]

EXPOSE 80 3306
CMD ["/run.sh"]
