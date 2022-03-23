<?php
require_once ('config.php');

//Hàm sử dụng cho truy vấn update ,insert , delete
function execute ($query){
    $conn = mysqli_connect(HOST,USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');

    mysqli_query($conn, $query);
    // Ngắt kết nối vs dữ liệu
    mysqli_close($conn);
};

function executeResult($query, $isSigle = false){
    $conn = mysqli_connect(HOST,USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');

    $resultset = mysqli_query($conn, $query);

    if($isSigle){
        $data = mysqli_fetch_array($resultset, 1);
    }else
    {
        $data = [];

        while (($row = mysqli_fetch_array($resultset, 1)) != null){
            $data[] = $row;
        }
    }

    mysqli_close($conn);
     
    return $data;
};
