<?php
$username = $email = $pwd = "";
if(!empty($_POST)){
    require_once('dbhelp.php');
    $username = getPost('username');
    $email = getPost('email');
    $pwd = getPost('pwd');
    var_dump($_POST);
    $query = "insert into resign_users(Name, Email, PASSWORD) values('$username', '$email', '$pwd' )";

    execute($query);
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
					<input type="text" name="username" class="form-control" placeholder="Nhap ten tai khoan" >
				</div>
				<div class="form-group">
					<label>Email: </label>
					<input type="email" name="email" class="form-control" placeholder="Nhap email" >
				</div>
				<div class="form-group">
					<label>Mat Khau: </label>
					<input type="password" name="pwd" class="form-control" placeholder="Nhap mat khau" >
				</div>
				<div class="form-group">
					<button class="btn btn-success">Dang Ky</button>
					<button class="btn btn-warning">Xoa Form</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
