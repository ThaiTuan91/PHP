<?php
$msg = $email= $pwd = "";
if(!empty($_POST)){
	require_once('dbhelp.php');

	$email = getPost('email');
	$pwd = getPost('pwd');

	$query = "select * from resign_users where Email = '$email' and PASSWORD = '$pwd'";
	 
	$data =  executeResult($query);

	if(count ($data)==1){
		header('Location: wellcome.php');
		die();
	} else {
		$msg = 'Danh Nhap That Bai!';
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
			Nhap Thong Tin Tai Khoan <p style="text-align: center; color: red;"><?=$msg?></p>
		</div>
		<div class="card-body">
			<form method="post">

				<div class="form-group">
					<label>Email: </label>
					<input type="email" name="email" class="form-control" placeholder="Nhap email" >
				</div>
				<div class="form-group">
					<label>Mat Khau: </label>
					<input type="password" name="pwd" class="form-control" placeholder="Nhap mat khau" v>
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
