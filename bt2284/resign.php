<?php
session_start();
require_once('dbhelp.php');
$username = $email = $pwd ="";
if(!empty($_POST)){
    $username = getPost('username');
    $email = getPost('email');
    $pwd = getPost('pwd');
    $pwd = getMD5pwd($pwd);

    $query = "insert into Users (username, email, pwd) values('$username','$email', '$pwd')";
    execute($query);

   header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>RESIGN</title>

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
                ĐĂNG KÝ TÀI KHOẢN
            </div>

            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label  >Tài khoản</label>
                        <input type="text" name ="username" class="form-control" placeholder = "Entrer Username">
                    </div>

                    <div class="form-group">
                        <label  >Email</label>
                        <input type="email" name ="email" class="form-control" placeholder = "Entrer Username">
                    </div>

                    <div class="form-group">
                        <label  >Password</label>
                        <input type="password" name ="pwd" class="form-control" placeholder = "Entrer Username">
                    </div>

                    <div class="form-group">
                        <button class ="btn btn-success">Confirm</button>
                    </div>

                 
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>