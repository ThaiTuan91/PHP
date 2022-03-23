<?php
 define('HOST', 'localhost');
 define('DATABASE', 'exam');
 define('USERNAME', 'root');
 define('PASSWORD', '');

 const SQL_CREATE_DATABASE = 'create database IF NOT EXISTS '.DATABASE;

 const SQL_CREATE_TABLE_DEPARTMENT = 'create table IF NOT EXISTS departments(
        id int primary key auto_increment,
        name varchar(50)
 )';

 const SQL_CREATE_TABLE_EMPLOYEE = 'create table IF NOT EXISTS employees(
        id_emp int primary key auto_increment ,
        No_emp int,
        name_emp varchar(50),
        age int,
        sex varchar(6),
        dept_id int references departments(id)
 )';
