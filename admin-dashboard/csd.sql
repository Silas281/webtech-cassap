drop database if exists csd;
create database csd;
use csd;

create table advisors(
	id int NOT NULL AUTO_INCREMENT,
    name varchar(50) not null,
    bio varchar(200),
    class varchar(10) not null,
    email varchar(50),
    tel varchar(15),
    booking_link varchar(200),
    primary key (id)
);

create table cpas(
	id int NOT NULL AUTO_INCREMENT,
    name varchar(50) not null,
    bio varchar(200),
    course varchar(50),
    class varchar(10) not null,
    email varchar(50),
    tel varchar(15),
    booking_link varchar(200),
    primary key (id)
);






