<?php
require_once('config.php');

function execute($query){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');

    mysqli_query($conn, $query);

    mysqli_close($conn);
};

function executeResult($query, $isSigle = false){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');

    $resultset = mysqli_query($conn, $query);
    $data = []; 
    if($isSigle){
        $data = mysqli_fetch_array($resultset, 1);
    }else{
        
        
        while (($row = mysqli_fetch_array($resultset, 1))!= null){
            $data[] = $row;
        }
    }
    mysqli_close($conn);

    return $data;
}