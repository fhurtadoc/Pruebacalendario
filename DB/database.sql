/* only on linux distributions 

CREATE USER 'name_user'@'localhost' IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON * . * TO 'alejo'@'localhost';

ALTER USER 'name_user'@'localhost' IDENTIFIED WITH mysql_native_password BY '1234';

FLUSH PRIVILEGES;

SHOW GRANTS FOR 'name_user'@'localhost';

sudo mysql -u name_user -p

*/

CREATE DATABASE schedule;
USE schedule;

CREATE TABLE users (
    id_user INT NOT NULL auto_increment PRIMARY KEY,
    name_user VARCHAR (100), 
    pass VARCHAR (100), 
    status VARCHAR(100)    
);

CREATE TABLE asing_task (
    id_user INT,
    id_task INT    
);

CREATE TABLE schedule_asing (
	id_schedule INT NOT NULL auto_increment PRIMARY KEY,
	id_task INT NULL
);



CREATE TABLE task (    
    id_task INT NOT NULL auto_increment PRIMARY KEY,
    name_task VARCHAR (100),
    description VARCHAR (100),
    status VARCHAR (100)

);

CREATE TABLE schedule (        
    id_schedule INT NOT NULL auto_increment PRIMARY KEY,
    date_schedule date, 
    status_schedule INT,
    hours_schedule INT
);

