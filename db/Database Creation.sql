CREATE DATABASE lmsdb;

USE  lmsdb;

CREATE TABLE questions(
    qid INT(250) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    question VARCHAR(250) NOT NULL,
    choice1 VARCHAR(250),
    choice2 VARCHAR(250),
    choice3 VARCHAR(250),
    choice4 VARCHAR(250),
    answer INT(250) NOT NULL);

CREATE TABLE users(
    uid INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    userName VARCHAR(128) NOT NULL  ,
    userPwd VARCHAR(128) NOT NULL,
    userJob VARCHAR(128) NOT NULL);

ALTER TABLE `users` ADD UNIQUE(`userName`);


CREATE TABLE settings (
    quizDate DATE NOT NULL,
    quizDuration TIME DEFAULT '00:10:00' NOT NULL
)