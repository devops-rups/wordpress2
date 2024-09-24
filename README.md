# wordpress2
# WordPress Project

This is a WordPress installation located in the `wordpress2` directory. This project contains various files and directories essential for running a WordPress site.
1. UPDATE SERVER
   sudo apt update && sudo apt upgrade

2. INSTALL APACHE
   sudo install apache2

3. START AND ENABLE APACHE
   sudo systemctl start apache2
   sudo systemctl enable apache2

4. INSTALL MYSQL
   sudo apt install mysql-server

5. SECURE THE MYSQL INSTALLATION
   sudo mysql_secure_installation

6. INSTALL PHP
   sudo apt install php libapache2-mod-php php-mysql

7. INSTALL ADDITIONAL PHP EXTENSIONS
   sudo apt install php-xml php-mbstring php-curl php-zip

8. LOGIN TO MYSQL
   sudo mysql -u root -p
 
9. CREATE DATABASE AND USER
   CREATE DATABASE wordpress;
   CREATE USER 'wordpress'@'localhost' IDENTIFIED BY 'My-password@1234';
   GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'localhost';
   FLUSH PRIVILEGES;
   EXIT;

10. DOWNLOAD WORDPRESS
    cd /var/www/html
    sudo wget https://wordpress.org/latest.tar/gz
    sudo tar -xzvf latest.tar.gz
    
11. CONFIGURE PERMISSIONS
    sudo chown -R www-data:www-data /var/www/html/wordpress
    sudo chmod -R 755 /var/www/html/wordpress

12. CONFIGURE WORDPRESS
    sudo cp wp-config-sample.php wp-config.php

13. EDIT WP-CONFIG.PHP
    sudo vim wp-config.php

14. UPDATE DATABASE SETTINGS
    define('DB_NAME', 'wordpress');
    deFine('DB_USER', 'wordpress);
    define('DB_PASSWORD', 'My-password@1234');

 
