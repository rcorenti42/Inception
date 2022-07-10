#!/bin/sh

sed -i "s/SQL_DB/$SQL_DB/g" /var/www/wp-config.php
sed -i "s/SQL_ROOT/$SQL_ROOT/g" /var/www/wp-config.php
sed -i "s/SQL_PWD/$SQL_PWD/g" /var/www/wp-config.php


alias wp='wp --allow-root'
wp core download
wp core install --url="rcorenti.42.fr" --title="Inception" --admin_user="$SQL_ROOT" --admin_password="$SQL_PWD" --admin_email="admin@rcorenti.42.fr" --skip-email
wp user create rcorenti rcorenti@student.42.fr