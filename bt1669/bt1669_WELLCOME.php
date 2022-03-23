<?php
// var_dump($_POST);
// var_dump($_GET);

$usernameCookie = $emailCookie = $pwdCookie = "";

    if(isset($_COOKIE['email'])){
        $emailCookie = $_COOKIE['email'];
    }
    if(isset($_COOKIE['pwd'])){
        $pwdCookie = $_COOKIE['pwd'];
    }
    if(isset($_COOKIE['username'])){
       $usernameCookie = $_COOKIE['username'];
    }
    if(!empty($_GET)) {
        if(isset($_GET['username'])) {
            $usernameCookie = $_GET['username'];
        }
        if(isset($_GET['email'])) {
            $emailCookie = $_GET['email'];
        }
        if(isset($_GET['pwd'])) {
            $pwdCookie = $_GET['pwd'];
        }
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
	<table class="table table-bordered">
		<tr>
			<th style="width: 200px">Ten Tai Khoan: </th>
			<td><?= $usernameCookie?></td>
		</tr>
		<tr>
			<th>Email: </th>
			<td><?=$emailCookie?></td>
		</tr>
		<tr>
			<th>Mat Khau: </th>
			<td>
				<?=$pwdCookie?>
				<!-- Build URL -> gui du lieu sang trang input.php bang giao thu GET -->
				<!-- POST & GET -->
				<a href="bt1669_Login.php?username=<?=$usernameCookie?>&email=<?=$emailCookie?>&password=<?=$pwdCookie?>">
					<button class="btn btn-warning btn-sm">Edit</button>
				</a>
			</td>
		</tr>
	</table>
</div>
</body>
</html>