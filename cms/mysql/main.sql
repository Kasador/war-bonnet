-- create database
CREATE DATABASE WarBonnet;
-- use database
USE WarBonnet;
-- create table for users
CREATE TABLE userinfo_tbl (
    userId int NOT NULL AUTO_INCREMENT,
    userName VARCHAR(50),
    pass VARCHAR(50),
    PRIMARY KEY (UserId)
);

-- DROP TABLE userinfo_tbl;

-- insert user into users table
INSERT INTO userinfo_tbl (userName, pass)
	VALUES ('admin', 1234);
    
/* SELECT 
	*
FROM
	userinfo_tbl; */

-- create table for images of events
CREATE TABLE events_tbl (
	eventId int NOT NULL AUTO_INCREMENT,
    title VARCHAR(100),
    imgName BLOB,
    description VARCHAR(200),
    PRIMARY KEY (eventId)
);

DROP TABLE events_tbl;

SELECT 
	*
FROM
	events_tbl;









