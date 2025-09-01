

sudo apt upgrade -y vs sudo dnf upgrade -y
sudo apt update
sudo apt install -y apache2 wget php libapache2-mod-php php-mysql php-json php-dev vs sudo dnf install -y httpd wget php-fpm php-mysqli php-json php php-devel
sudo apt install mariadb-server vs sudo dnf install mariadb105-server
apt show mariadb-server vs sudo dnf info mariadb105
sudo systemctl start apache2 vs sudo systemctl start httpd
sudo systemctl enable apache2 vs sudo systemctl enable httpd
sudo systemctl is-enabled apache2 vs sudo systemctl is-enabled apache2
sudo usermod -a -G www-data ubuntu vs sudo usermod -a -G apache ec2-user
exit
groups
sudo chown -R ubuntu:www-data /var/www vs sudo chown -R ec2-user:apache /var/www
sudo chmod 2775 /var/www && sudo find /var/www -type d -exec chmod 2775 {} \; vs sudo chmod 2775 /var/www && find /var/www -type d -exec sudo chmod 2775 {} \;
find /var/www -type f -exec sudo chmod 0664 {} \;
echo "<?php phpinfo(); ?>" | sudo tee /var/www/html/phpinfo.php vs echo "<?php phpinfo(); ?>" > /var/www/html/phpinfo.php
apt list --installed | grep -E 'apache2|mariadb|php8.4' vs sudo dnf list installed httpd mariadb105 php8.4
sudo rm /var/www/html/phpinfo.php
sudo systemctl start mariadb
sudo mysql_secure_installation
sudo systemctl is-enabled apache2 vs sudo systemctl is-enabled httpd
sudo systemctl start apache2 && sudo systemctl enable apache2 vs sudo systemctl start httpd && sudo systemctl enable httpd
sudo apt install -y openssl apache2 vs sudo dnf install -y openssl mod_ssl
sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 \ -keyout /etc/ssl/private/apache-selfsigned.key \ -out /etc/ssl/certs/apache-selfsigned.crt vs sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 \ -keyout /etc/ssl/private/apache-selfsigned.key \ -out /etc/ssl/certs/apache-selfsigned.crt
sudo nano //etc/apache2/sites-available/default-ssl.conf (Arrumar o caminho do arquivo do certificado e da key)
sudo chmod 600 /etc/ssl/private/apache-selfsigned.key
sudo chmod 600 /etc/ssl/private/apache-selfsigned.key
sudo chown root:root /etc/ssl/private/apache-selfsigned.key (Dando a permissão para acesso a chave)
sudo nano /etc/apache2/sites-available/default-ssl.conf
sudo systemctl restart apache2 vs sudo systemctl restart httpd
sudo apt install -y php8.1 php8.1-fpm php8.1-mbstring php8.1-xml vs sudo dnf -y install php-mbstring php-xml
sudo systemctl restart apache2
sudo systemctl restart php8.1-fpm vs sudo systemctl restart php-fpm
cd /var/www/html wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz
mkdir phpMyAdmin && tar -xvzf phpMyAdmin-latest-all-languages.tar.gz -C phpMyAdmin --strip-components 1
rm phpMyAdmin-latest-all-languages.tar.gz
sudo systemctl start mariadb
sudo apt install git vs sudo dnf install git
git init
git clone https://github.com/Felipe-student/Testando-AWS.git
sudo mariadb -u root
create database mensagens;
create table mensagens (
	id INT(11)  AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(150) NOT NULL,
	mensagem TEXT(150) NOT NULL,
	data_envio TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
exit
