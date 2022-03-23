<?php
// var_dump($_POST);
// var_dump($_GET);
session_start();

if(!isset($_SESSION['currentUser'])){
    header('Location: login.php');
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
    <div class="card" style="margin-top: 20px;">
        <div class="card-header bg-info text-white">
			TRANG QUẢN LÝ TÀI KHOẢN
		    </div>
        <div class="card-body">   
           
	        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                      
                            Tai khoan
                        </th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Mat khau</th>
                        <th style="width: 60px"></th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td><?=$_SESSION['currentUser']['username']?></td>
                        <td><?=$_SESSION['currentUser']['email']?></td>
                        <td><?=$_SESSION['currentUser']['address']?></td>
                        <td> <?=$_SESSION['currentUser']['pwd']?></td>
                        <td style="width: 60px">
                        <a href="edit.php">
                            <button class="btn btn-warning"  >Sua</button>
                        </td>
                        <td style="width: 60px">
                        <a href="login.php">
                            <button class="btn btn-warning"  >Logout</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>