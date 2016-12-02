<?php
# This is the database name
$dbname='care2x';

# Database user name, default is root or httpd for mysql, or postgres for postgresql
$dbusername='root';

# Database user password, default is empty char
$dbpassword='ajeng340';

# Database host name, default = localhost
$dbhost='localhost';

# First key used for simple chaining protection of scripts
$key='77682756930870';

# Second key used for accessing modules
$key_2level='15383184364589';

# 3rd key for encrypting cookie information
$key_login='208269124688';

# Main host address or domain
$main_domain='localhost';

# Host address for images
$fotoserver_ip='localhost';

# Transfer protocol. Use https if this runs on SSL server
$httprotocol='http';

# Set this to your database type. For details refer to ADODB manual or goto http://php.weblogs.com/ADODB/
$dbtype='mysqli';

# Set this to your timezone.
$timezone = 'Africa/Abidjan';
date_default_timezone_set($timezone);
?>