<?php
// var_dump($_POST);
// var_dump($_GET);
session_start();
$fullnameSession = $emailSession = $addressSession = $pwdSession = "";
    if(isset($_SESSION['username'])){
        $fullnameSession = $_SESSION['username'];
    }
    if(isset($_SESSION['email'])){
        $emailSession = $_SESSION['email'];
    }
    if(isset($_SESSION['address'])){
        $addressSession = $_SESSION['address'];
     }
     if(isset($_SESSION['pwd'])){
        $pwdSession = $_SESSION['pwd'];
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome Page</title>

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
<h2>Dang Nhap Thanh Cong</h2>
	<table class="table table-bordered">
		<tr>
			<th style="width: 200px">Ten Tai Khoan: </th>
			<td><?= $fullnameSession?></td>
		</tr>
		<tr>
			<th>Email: </th>
			<td><?=$emailSession?></td>
		</tr>
        <tr>
			<th>Địa chỉ: </th>
			<td><?=$addressSession?></td>
		</tr>

		<tr>
			<th>Mat Khau: </th>
			<td>
				<?=$pwdSession?></td>
		</tr>
	</table>
</div>
</body>
</html>