<?php
require_once('../model/config.php');

function initDB(){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD);

    mysqli_set_charset($conn, 'utf8');

    mysqli_query($conn, SQL_CREATE_DATABASE);

    mysqli_close($conn);
}

function execute($query){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    mysqli_set_charset($conn, 'utf8');

    mysqli_query($conn, $query);

    mysqli_close($conn);
}

function executeResult($query, $isSingle = false){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    mysqli_set_charset($conn, 'utf8');

    $resultset = mysqli_query($conn, $query);

    if($isSingle){
        $data = mysqli_fetch_array($resultset, 1);
    }else {
        $data = [];
        while (($row =mysqli_fetch_array($resultset, 1)) !=null ) {
            $data [] = $row;
        }
    }

    mysqli_close($conn);

    return $data;
}