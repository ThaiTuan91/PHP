<?php
function getPost($key, $slash = '\''){
    $value = '';
    if(isset($_POST[$key])){
        $value = $_POST[$key];

        $value = str_replace($slash, "\\".$slash, $value);
    }
    
    return $value;
}

function getGet($key, $slash = '\''){
    $value = '';
    if(isset($_GET[$key])){
        $value = $_GET[$key];

        $value = str_replace($slash, "\\".$slash, $value);
    }
    
    return $value;
}