<?php
  require_once('dbhelper.php');
  
$username= $password= $msg= $them=$remeber= $id ='';
if(!empty($_POST)){
    if(isset($_POST)){
        $username = getPost('username');
        $password = getPost('password');
        $them = getPost('them');
        $remeber = getPost('remeber');
        $id = getPost('id');
    
        $sql = "select * from user_info where username ='$username' and password = '$password' ";
       
        execute($sql);
    
        if($username != 'admin' || $password != '123456'){
            echo '<script>alert("LOGIN FAILS -Your password or username is not correctl!!!")</script>';
        } 
         else if($username == 'admin' && $password == '123456'){
            header('Location: e5-manager.php');
            die();  
        }
       
    
        if($remeber == '5'){    
            setcookie('username', $username, time()+5000, '/');
            setcookie('password', $password, time()+5000, '/');
        }else if($remeber == 'forever'){
            setcookie('username', $username, time()+365*24*60*60, '/');
            setcookie('password', $password, time()+365*24*60*60, '/');
        }
    }
  
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <style>
        .form-group{
            margin-bottom: 20px;
        }        
    </style>

</head>
<body style = "background-color: <?=$them?>">
    <div class="container">
        <div class="card">
            <div class="card-header text-white bg-info">
                <h2>Đăng Nhập</h2>
            </div>

            <div class="card-body">
                <form method = "post">
                <div class="form-group">
                    <label for="">Username:</label>
                    <input required type="text" name ="username" class ="form-control" value =<?=$username?>>
                </div>
                <div class="form-group">
                    <label for="">password:</label>
                    <input required type="password" name ="password" class ="form-control" value =<?=$password?>>
                </div>
                <div class="form-group">
                    <label for="">Them: </label>
                    <label for=""><input type="radio" name ="them" value ="black">Dark</label>
                    <label for=""><input type="radio" name ="them" value ="white">Light</label>
                    
                </div>
                <div class="form-group">
                    <label for="">Remmber Me for: </label>
                    <input type="radio" name ="remeber" value ="5">5s
                    <input type="radio" name ="remeber" value ="forever">Forever
                </div>
                <div class="form-group">
                <button class = "btn btn-success">Submit</button>
                </div>      
            </form>
            </div>
        </div>
    </div>
</body>
</html>