<?php
session_start();
$emailLogin = $pwdLogin = $msg="";
if(!empty($_POST)){
        if(isset($_POST['email_Login']) && isset($_POST['pwd_Login'])){
            $emailLogin = $_POST['email_Login'];
            $pwdLogin = $_POST['pwd_Login'];
        }

        if(!isset($_SESSION['data'])){
            $_SESSION['data'] = [];

        }
         foreach ( $_SESSION['data'] as $item){
                if($item['email'] == $emailLogin && $item['pwd'] == $pwdLogin){
					$_SESSION['currentUser'] = $item;
                    header("Location: wellcom.php");
                }
         }
		 $msg = '-> Sai tài khoản hoặc mật khẩu, Yêu cầu nhập lại!!!';
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
			Nhap Thong Tin Tai Khoan <font color="yellow"><?=$msg?></font>
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
					<p><a href="resign.php">Dang ky tai khoan moi</a></p>
					<button class="btn btn-success" >Dang Nhap</button>

				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>