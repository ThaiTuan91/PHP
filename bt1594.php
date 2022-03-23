<?php
    if(!empty($_POST)){
       $Usn = $email =  $pwd = " ";

       if(isset($_POST['Usn'])){
           $Usn = $_POST['Usn'];
       }

       if(isset($_POST['email'])){
            $email = $_POST['email'];
        }

        if(isset($_POST['pwd'])){
            $pwd = $_POST['pwd'];
        }

        echo "<br> User Name:".$Usn ."<br> Email:". $email ."<br>Password:". $pwd;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Bai tap 1594-Xu ly form đăng nhập</title>
</head>
<body>
    <div class="container">
        <form method  = "post">
        <div class = "form-group">
            <label >UserName:</label>
            <input type="text" name ="Usn" placeholder = "Enter User name" class = "form-controll">
        </div>

        <div class="form-group">
			<label>Email: </label>
            <input type="text" name ="email" placeholder = "Enter email" class = "form-controll">
        </div>

        <div class = "form-group">
            <label >Password:</label>
            <input type="password" name ="pwd" placeholder = "Enter password" class = "form-controll">
        </div>
        
        <div class = "form-group">
            <button class="btn btn-success" type="submit">Login</button>
            <button class="btn btn-warning" type="reset">Reset</button>
        </div>
    </form>
       
         

    </div>
</body>
</html>