/*************************
* Wishlist Database
*************************/

Drop DATABASE IF EXISTS Wishlist_DB;
CREATE DATABASE Wishlist_DB;
USE Wishlist_DB;


CREATE TABLE wishers(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name CHAR(50) NOT NULL UNIQUE,
	password CHAR(50) NOT NULL
);

CREATE TABLE wishes(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	wisherID INT NOT NULL,
	description CHAR(255) NOT NULL,
	dueDate DATE,
	FOREIGN KEY (wisherID) REFERENCES wishers(id)
);

INSERT INTO wishers(name, password) VALUES
('Tom', 'tomcat'),
('Jerry', 'jerrymouse');

INSERT INTO wishes (wisherID, description, dueDate) VALUES 
(1, 'Sausage', 080401),
(2, 'Cheese', 080501);

INSERT INTO wishes(wisherID, description) VALUES 
(1, 'Icecream'),
(2, 'Candle');



GRANT SELECT, INSERT, DELETE, UPDATE
ON Wishlist_DB.*
TO phpuser@localhost
IDENTIFIED BY 'pa55word';