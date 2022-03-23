<?php
require_once('dbhelp.php');

$action = getPost('action');

switch($action){
    case 'delete':
        deleteformDB();
        break;
}

function deleteformDB(){
    $id = getPost('id');

    $query = "delete from gifts where id = '$id'";
    execute($query);
}