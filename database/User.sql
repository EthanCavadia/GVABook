CREATE DATABASE checkinfo

CREATE TABLE register (
    id int(10) PRIMARY KEY,
	firstname varchar(255) NOT NULL,
	lastname varchar(255) NOT NULL,
	username varchar(255) NOT NULL,
	password varchar(50) NOT NULL
);