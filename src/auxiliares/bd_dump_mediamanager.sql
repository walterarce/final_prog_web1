CREATE USER 'mediamanager'@'localhost' IDENTIFIED BY 'mediamanager';
GRANT USAGE ON *.* TO 'mediamanager'@'localhost';
CREATE DATABASE IF NOT EXISTS `mediamanager` DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
GRANT ALL PRIVILEGES ON `mediamanager`.* TO 'mediamanager'@'localhost';

USE mediamanager;


