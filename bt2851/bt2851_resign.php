<?php
session_start();
// var_dump ($_POST);
$fullname = $email = $address = $pwd = "";
if(!empty($_POST)){
	if(isset($_POST['username'])) {
		$fullname = $_POST['username'];
	}
	if(isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if(isset($_POST['address'])) {
		$address = $_POST['address'];
	}
	if(isset($_POST['pwd'])) {
		$pwd = $_POST['pwd'];
	}
	
	$action = $_POST['action'];

	if($action == 'submit'){
		$_SESSION['username'] = $fullname;
		$_SESSION['email'] = $email;
		$_SESSION['address'] = $address;
		$_SESSION['pwd'] = $pwd;
	}else if($action == 'del') {
		unset($_SESSION['username']);
		unset($_SESSION['email']);
		unset($_SESSION['address']);
		unset($_SESSION['pwd']);
	}

	header('Location: bt2851_login.php');
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Form</title>

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
					<label>Tai Khoan: </label>
					<input type="text" name="username" class="form-control" placeholder="Nhap ten tai khoan" value="<?=$fullname?>">
				</div>
				<div class="form-group">
					<label>Email: </label>
					<input type="email" name="email" class="form-control" placeholder="Nhap email" value="<?=$email?>">
				</div>

                <div class="form-group">
					<label>Địa chỉ: </label>
					<input type="text" name="address" class="form-control" placeholder="Nhap địa chỉ" value="<?=$address?>">
				</div>

				<div class="form-group">
					<label>Mat Khau: </label>
					<input type="password" name="pwd" class="form-control" placeholder="Nhap mat khau" value="<?=$pwd?>">
				</div>
				<div class="form-group">
					<button class="btn btn-success" name = "action" value = "submit">Dang Ky</button>
					<button class="btn btn-warning" name = "action" value = "del">Xoa Form</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
