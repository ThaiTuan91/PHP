<?php
session_start();
// var_dump ($_POST);
// if(isset($_SESSION['currentUser'])){
// 	header('Location:wellcom.php');
// 	die();
// }

$fullname = $email = $address = $pwd = "";
if(!empty($_POST)){
	if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['pwd'])) {
		$fullname = $_POST['username'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$pwd = $_POST['pwd'];
	}; 

    if(!isset($_SESSION['data'])){
        $_SESSION['data'] = [];
    };

    $_SESSION['data'][] = [
        'username' => $fullname,
        'email' => $email,
        'address' => $address,
        'pwd' => $pwd,
    ];
    // var_dump($_SESSION);
	header('Location: login.php');
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
