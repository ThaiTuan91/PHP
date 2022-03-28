<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection failed : ". mysqli_connect_error() );
}

$sql = "CREATE DATABASE exam1";
if(mysqli_query($conn, $sql)){
    echo "create database exam1 successfull!";

    mysqli_select_db($conn, 'exam1');

    $sql = "CREATE TABLE user_info (
        id int primary key auto_increment,
        username varchar(30),
        password varchar(40)  
    )";

    if(mysqli_query($conn, $sql)){
        echo "create table user_info successfull";

        mysqli_select_db($conn, 'exam1');

        $sql = "INSERT INTO user_info (username, password)
        VALUES ('admin', '123456')";
        if(mysqli_query($conn, $sql)){
            echo " insert data successfull, Please remember your username is 
            'admin' and password is '123456' ";
        }else{
            echo 'failed cus the data already exists!!';
        }
    }
    else{
        echo 'Table already exists!! ';
    }

}
else{
    echo " Database already exists!!";
}

mysqli_close($conn);