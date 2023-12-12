create database project_db;
-- drop database project_db;
use project_db;

create TABLE tb_users(
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) UNIQUE,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    access INTEGER DEFAULT 1,
    password LONGTEXT
);

insert into tb_users(password,email,firstname,lastname,access) values 
(123,'igor@igor','igor','igor',1),
(123,'savio@savio','savio','savio',1),
(123,'wandson@wandson','wand','wand',1)
;