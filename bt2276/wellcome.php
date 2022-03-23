<?php
require_once('dbhelp.php');
$query = "select * from resign_users";
$userList = executeResult($query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wellcome Page</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th style="width: 50px">No</th>
				<th>Full Name</th>
				<th>Email</th>
				<th style="width: 60px"></th>
				<th style="width: 60px"></th>
			</tr>
		</thead>
		<tbody>
<?php
$index = 0;
foreach($userList as $item) {
	echo '<tr>
			<td style="width: 50px">'.(++$index).'</td>
			<td>'.$item['Name'].'</td>
			<td>'.$item['Email'].'</td>
			<td style="width: 60px"><button class="btn btn-warning">Edit</button></td>
			<td style="width: 60px"><button class="btn btn-danger" onclick="deleteUser('.$item['id'].')">Delete</button></td>
		</tr>';
}
?>
		</tbody>
	</table>
</div>
<!-- 
<script type="text/javascript">
	function deleteUser(id) {
		var option = confirm('Are you sure to delete this user?')
		if(!option) return

		$.post('api_user.php', {
			'action': 'delete',
			'id': id
		}, function(data) {
			location.reload()
		})
	} -->
</script>
</body>
</html>