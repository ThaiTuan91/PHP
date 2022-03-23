<?php
require_once('dbhelp.php');
$id=$username = $email = $pwd = $address = "";
if(!empty($_POST)){
    $username = getPost('username');
    $email = getPost('email');
    $address = getPost('address');
    $pwd = getPost('pwd');
    $id = getPost('id');

    $query = "update form_users set username = '$username', email = '$email', address = '$address', PASSWORD = '$pwd' where id ='$id' ";
	execute($query);

	header('Location:form.php');
}

$id = getGet('id');
if($id >0){
	$query = "select * from form_users where id = '$id' ";
	$result = executeResult($query, true);
	$id = '';

	if($result !=null){
		$username = $result['username'];
		$email = $result['email'];
		$address = $result['address'];
		$id = $result['id'];
	}
	else {
		$id ='';
	}
	if($id == ''){
		header('Location:form.php');
	}
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
			SỬA THÔNG TIN CÁ NHÂN
		
		</div>
		<div class="card-body">
			<form method="post">
				<div class="form-group">
					<label>Tai Khoan: </label>
                    <input type="text" name ="id" value = "<?=$id?>">
					<input type="text" name="username" class="form-control" placeholder="Nhap ten tai khoan" value = "<?=$username?>">
				</div>
				<div class="form-group">
					<label>Email: </label>
					<input type="email" name="email" class="form-control" placeholder="Nhap email" value = "<?=$email?>">
				</div>

                <div class="form-group">
					<label>Address: </label>
					<input type="text" name="address" class="form-control" placeholder="Nhap address"value = "<?=$pwd?>" >
				</div>

				<div class="form-group">
					<label>Mat Khau: </label>
					<input type="password" name="pwd" class="form-control" placeholder="Nhap mat khau">
				</div>
				<div class="form-group">
					<button class="btn btn-success" name = "action" value = "submit">SAVE</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
