CREATE DATABASE CheapoMail;

CREATE TABLE Users
(
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname varchar(300),
lastname varchar(300),
username varchar(300),
password varchar(300)
);


INSERT INTO Users(id, firstname, lastname, username, password) VALUES (100976, 'Mary', 'Lyn', 'maryLyn', MD5('Hello98!'));


CREATE TABLE Messages (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
recipient_id INT UNSIGNED, 
user_id INT UNSIGNED,
subject varchar(300),
body text,
date_sent date
);

INSERT INTO Messages(id, recipient_id, user_id, subject, body, date_sent) VALUES
(10096, 7864, 0963, 'YES', 'HUH',Dec 3, 2017);


CREATE TABLE Messages_read (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
message_id int  NOT NULL, 
reader_id int NOT NULL,
date date
);

INSERT INTO Messages_read(id, message_id, reader_id, date) VALUES
(10096, 77, 7864, Dec 3, 2017());