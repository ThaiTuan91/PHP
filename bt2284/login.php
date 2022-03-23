<?php
session_start();
require_once('dbhelp.php');

$user = validateLogin();
if($user != null){
    header('Location: quantri.php');
    die();
}
$msg=$email = $pwd = '';
if(!empty($_POST)){
    $email = getPost('email');
    $pwd = getPost ('pwd');
    $pwd = getMD5pwd($pwd);

    $query = "select * from Users where email = '$email'and pwd = '$pwd'";
    $data = executeResult($query, true);

    if($data !=null){
        $_SESSION['currentuser']= $data;
        $token = getMD5pwd($data['email'].time()); 
        $query = "update Users set token = '$token' where id = ".$data['id'];
        execute($query);
        setcookie('token', $token, time() + 5*24*60*60, '/');

        header('Location: quantri.php');
        die();
    }else{
        $msg= 'FAILED!!';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        .form-group{
            margin-top : 20px;
        }

        .container{
            margin-top : 40px;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
        <div class="card">
            <div class="card-header bg-info text white">
                ĐĂNG NHẬP
                <h1 style="text-align: center; color: red;"><?=$msg?></h1>
            </div>

            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label  >Email</label>
                        <input type="email" name ="email" class="form-control" placeholder = "Entrer Email">
                    </div>

                    <div class="form-group">
                        <label  >Password</label>
                        <input type="password" name ="pwd" class="form-control" placeholder = "Entrer Password">
                    </div>

                    <div class="form-group">
                        <button class ="btn btn-success">LOGIN</button>
                        <button class ="btn btn-info"><a href ="resign.php">NEW ACCOUNT </a></button>
                    </div>
</body>
</html>