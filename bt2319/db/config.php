<?php
define('HOST', 'localhost');
define('DATABASE', 'bt2319');
define('USERNAME', 'root');
define('PASSWORD', '');

const SQL_CREATE_DATABASE  = ' create database IF NOT EXISTS  '.DATABASE;
const SQL_CREATE_TABLE_LIBRARY = 'create table  IF NOT EXISTS  library(
        bookid int not null primary key auto_increment,
        authorid int not null,
        title varchar(55) not null,
        ISBN varchar(25) not null,
        pub_year smallint(6) not null,
        avaliable tinyint(4) not null
)';