#File:	products.sql

#Create table named products

CREATE TABLE if not exists products
(
	id INT NOT NULL AUTO_INCREMENT,
	type VARCHAR(20) NOT NULL,
	manufacturer VARCHAR(20) NOT NULL,
	description VARCHAR(50) NULL,
	price INT NOT NULL,
	image VARCHAR(50) NOT NULL,
	PRIMARY KEY (id)
); 

#Add a number of records

INSERT INTO products(type, manufacturer, description, price, image)
 VALUES ('Processor', 'Intel', 'i7 7th Gen 3Ghz', 431, 'images/i7_7th_gen.jpg');
INSERT INTO products(type, manufacturer, description, price, image)
 VALUES ('Processor', 'Intel', 'Celeron 1 Ghz', 125, 'images/i_celeron.jpg');

#End products.sql
