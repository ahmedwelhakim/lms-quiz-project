CREATE DATABASE quizdbase;

USE  quizdbase;

CREATE TABLE questions(
    qid INT(250) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    question VARCHAR(250),
    ans_id INt(250) );

CREATE TABLE answers(
    aid INT(250) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    answer VARCHAR(250),
    ans_id INt(250) );

CREATE TABLE user(
    uid INT(250) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username VARCHAR(250),
    totalques INt(250),
    answercorrect INT(250));

CREATE TABLE quizregistration(
    qrid INT(250) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    user VARCHAR(250),
    pass VARCHAR(250)
   );