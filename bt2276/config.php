<?php
define('HOST', 'localhost');
define('DATABASE', 'bt2276');
define('USERNAME', 'root');
define('PASSWORD', '');

function getPost($key, $slash = '\''){
    $value = '';
    if(isset($_POST[$key])){
        $value= $_POST[$key];
        $value = str_replace($slash, "\\".$slash, $value);
    }
    return $value;
};


