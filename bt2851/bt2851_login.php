<?php
session_start();
$emailLogin = $pwdLogin = "";
if(!empty($_POST)){
        if(isset($_POST['email_Login'])){
            $emailLogin = $_POST['email_Login'];
        }

        if(isset($_POST['pwd_Login'])){
            $pwdLogin = $_POST['pwd_Login'];
        }

        $emailSession = $pwdSession = "";
 
        if(isset($_SESSION['email'])){
            $emailSession = $_SESSION['email'];
        }
        if(isset($_SESSION['pwd'])){
            $pwdSession = $_SESSION['pwd'];
        }

        if($emailLogin == $emailSession && $pwdLogin==$pwdSession){
            echo 'Login Thành Công';
            header("Location: bt2851_wellcome.php");
        }
        else {
            echo 'Login Faill';

        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-header bg-info text-white">
			Nhap Thong Tin Tai Khoan
		</div>
		<div class="card-body">
			<form method="post">

				<div class="form-group">
					<label>Email: </label>
					<input type="email" name="email_Login" class="form-control" placeholder="Nhap email" >
				</div>
				<div class="form-group">
					<label>Mat Khau: </label>
					<input type="password" name="pwd_Login" class="form-control" placeholder="Nhap mat khau" v>
				</div>
				<div class="form-group">
					<button class="btn btn-success">Dang Nhap</button>

				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>