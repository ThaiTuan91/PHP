<?php
define('HOST', 'localhost');
define('DATABASE', 'bt2277');
define('USERNAME', 'root');
define('PASSWORD', '');

const  SQL_CREATE_DATABASE = ' create database IF NOT EXISTS '.DATABASE;

const SQL_CREATE_TABLE_CATEGORY = 'create table IF NOT EXISTS category (
        id int primary key auto_increment,
        catname varchar(50)
)';

const SQL_CREATE_TABLE_PRODUCTS= 'create table IF NOT EXISTS products (
    id int primary key auto_increment,
    title varchar(50),
    price float,
    thumbnail varchar(500),
    content varchar(200),
    createat datetime,
    updateat datetime,
    id_cat int references category(id)
)';

