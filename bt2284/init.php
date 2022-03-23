<?php
require_once('dbhelp.php');
// BƯỚC 1: TẠO DATABASE
// Tạo kết nối
$conn = mysqli_connect('localhost', 'root', '');
 
// Nếu kết nối thất bại
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
 
// Lệnh tạo database
$sql = "CREATE DATABASE gift_db";
 
// Thực thi câu truy vấn
if (mysqli_query($conn, $sql)) 
{
    echo 'Tạo database thành công!';
    
    // BƯƠC 2: TẠO TABLE
    // Chọn database
    mysqli_select_db($conn, 'gift_db');
    
    // Câu lệnh SQL
    $sql = "CREATE TABLE Users (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50),
            email varchar(150),
            pwd varchar(32),
            token varchar(32)
        )";

    // $sqltb2 = "CREATE TABLE gifts(
    //         thumbnail varchar (500),
    //         noidung varchar(200),
    //         giatien money,
    //         ngaytao datetime,
    //         ngaysua datetime,
    //         id_user INT FOREIGN KEY REFERENCES USERS (id)
    //     )";
   
    
    // Thực thi câu truy vấn
    if (mysqli_query($conn, $sql)) {
        echo "Tạo table thành công";
    } else {
        echo "Tạo table thất bại: " . mysqli_error($conn);
    }
    
} else {
    echo "Tạo database thất bại: " . mysqli_error($conn);
}
mysqli_close($conn);


 
//     $sql = "CREATE TABLE gifts(
//         title varchar(200),
//         thumbnail varchar (500),
//         noidung varchar(200),
//         giatien money,
//         ngaytao datetime,
//         ngaysua datetime,
//         id_user INT FOREIGN KEY REFERENCES USERS (id)
//     )";

//     if (mysqli_query($conn, $sql)) {
//         echo "Tạo table thành công";
//     } else {
//         echo "Tạo table thất bại: " . mysqli_error($conn);
//     }

// } else {
//     echo "Tạo database thất bại: " . mysqli_error($conn);
// }
 
 // Tạo xong thì ngắt kết nối
// mysqli_close($conn);




?>
