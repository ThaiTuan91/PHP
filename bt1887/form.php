<?php
// var_dump($_POST);
// var_dump($_GET);
require_once('dbhelp.php');

$username = $email = $pwd = $address = "";
if(!empty($_POST)){
    $username = getPost('username');
    $email = getPost('email');
    $address = getPost('address');
    $pwd = getPost('pwd');
  
    $query = "insert into form_users(username, email, address,  PASSWORD) values('$username', '$email', '$address', '$pwd' )";

    execute($query);
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INFTORMATION Page</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 15px;
		}
        .container{
            margin-top : 40px;
        }
	</style>

<script type="text/javascript">
	function deleteUser(id) {
            var option = confirm('Are you sure to delete this user?')
            if(option) {
                // alert (123)
                $.post('api.php', {
                    'action': 'delete',
                    'id': id
                }, function(data) {
                    location.reload()
                })
            }
            // alert (id)
    }
    </script>
    
</head>
<body>
<div class="container">
<table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Address</th>
                <th style="width: 60px"></th>
				<th style="width: 60px"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "select * from form_users";
                $userList = executeResult($query);  
				$index =0;
				foreach($userList as $item) {
                    echo '<tr>
                            <td style="width: 50px">'.(++$index).'</td>
                            <td>'.$item['username'].'</td>
                            <td>'.$item['email'].'</td>
                            <td>'.$item['address'].'</td>
                            <td style="width: 60px">
                            <a href = "edit.php?id='.$item['id'].'"><button class="btn btn-warning">Edit</button>
                            </td>
                            <td style="width: 60px"><button class="btn btn-danger" onclick="deleteUser('.$item['id'].')">Delete</button></td>
                        </tr>';
                }
				
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
					<label>Address: </label>
					<input type="text" name="address" class="form-control" placeholder="Nhap address" >
				</div>

				<div class="form-group">
					<label>Mat Khau: </label>
					<input type="password" name="pwd" class="form-control" placeholder="Nhap mat khau">
				</div>
				<div class="form-group">
					<button class="btn btn-success" name = "action" value = "submit">ADD</button>
				</div>
			</form>
		</div>
	</div>
</div>


</body>
</html>