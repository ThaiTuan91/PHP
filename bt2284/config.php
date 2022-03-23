<?php
define ('HOST', 'localhost');
define ('DATABASE', 'gift_db');
define ('USERNAME', 'root');
define ('PASSWORD', '');


function getPost($key, $slash = '\''){
    $value = '';
    if(isset($_POST[$key])){
        $value = $_POST[$key];
        $value = str_replace($slash, "\\".$slash, $value);
    }
    return $value;
}

function getMD5pwd($pwd){
    $encrypt = md5($pwd);

    $encrypt = md5('rwerwesad*^^88'.$encrypt);

    return $encrypt;
}

function getGet($key, $slash = '\''){
    $value = '';
    if(isset($_GET[$key])){
        $value = $_GET[$key];
        $value = str_replace($slash, "\\".$slash, $value);
    }
    return $value;
}

function validateLogin(){
    if(isset($_SESSION['currentuser'])){
        return $_SESSION['currentuser'];
    }

    $token = '';

    if(isset($_COOKIE['token'])){
        $token = $_COOKIE['token'];
        $query = "select * from Users where token = '$token'";
        $data = executeResult($query, true);
        
        if($data != null){
            $_SESSION['currentuser'] = $data;
            return $data;
        }
    }
    return null;
}
