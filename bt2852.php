<?php
// var_dump($_POST);
// var_dump($_GET);

session_start();
$username = $email  = $pwd = "";
// Cách 1 :
if(!empty($_POST)){
	if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pwd'])) {
		$_SESSION['username'][]  = $_POST['username'];
		$_SESSION['email'][] = $_POST['email'];
		$_SESSION['pwd'][] = $_POST['pwd'];
	}	

}

//  cách 2: 
	
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
        .container{
            margin-top : 40px;
        }
	</style>
</head>
<body>
<div class="container">
<table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // SU dung mang để lưu sau đó tìm kiếm tránh trùng lặp và luu vào mảng rồi in ra ????
            //  bài toán đặt ra làm sao để lưu thôn tin vào mảng
			// Cách 1 :
				$index =0;
				if(isset($_SESSION['username'])){
				for ($i=0; $i <count($_SESSION['username']) ; $i++) { 
					echo '<tr>
							<td>'.(++$index).'</td>
							<td>'.$_SESSION['username'][$i].'</td>
							<td>'.$_SESSION['email'][$i].'</td>
							<td>'.$_SESSION['pwd'][$i].'</td>
				</tr>';
				};
			}
				
			// Cách 2:
        ?>
    </tbody>
 
	</table>
</div>

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
					<input type="password" name="pwd" class="form-control" placeholder="Nhap mat khau">
				</div>
				<div class="form-group">
					<button class="btn btn-success" name = "action" value = "submit">Dang Ky</button>
				</div>
			</form>
		</div>
	</div>
</div>


</body>
</html>