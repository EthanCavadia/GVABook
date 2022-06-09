CREATE DATABASE userInfo

CREATE TABLE register (
	firstName varchar(255) NOT NULL,
	lastName varchar(255) NOT NULL,
	username varchar(255) NOT NULL,
	password varchar(50) NOT NULL,
	loggedin BIT
);