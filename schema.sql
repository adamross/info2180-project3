DROP DATABASE IF EXISTS projdb;
CREATE DATABASE projdb;
USE projdb;

CREATE TABLE User
(
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname varchar(255),
lastname varchar(255),
username varchar(255),
password varchar(255)
);

INSERT INTO User(id, firstname, lastname, username, password) VALUES
(1, 'Adam-Ross', 'Findlator', 'adamross', '5f4dcc3b5aa765d61d8327deb882cf99');

DROP TABLE IF EXISTS Message;
CREATE TABLE Message (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
recipient_id INT UNSIGNED, 
user_id INT UNSIGNED,
subject varchar(255),
body text,
date_sent date
);

INSERT INTO Message(id, recipient_id, user_id, subject, body, date_sent) VALUES
(1, 2, 1, 'hey', 'how are you',CURDATE());


DROP TABLE IF EXISTS Message_read;
CREATE TABLE Message_read (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
message_id int  NOT NULL, 
reader_id int NOT NULL,
date date
);

INSERT INTO Message_read(id, message_id, reader_id, date) VALUES
(1, 1, 1, CURDATE());pent