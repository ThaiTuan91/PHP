<?php
require_once('utils/utility.php');
require_once('db/dbhelper.php');

if(!empty($_POST)){
    $id = getPost('id');

    $query = "delete from products  where id = '$id'";
    execute($query);

    header('Location: products.php');
    die();
}

$id = getGet ('id');
$query = "select * from products where id = '$id'";
$item = executeResult($query, true);
if($item == null){
    header('Location: products.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELTED</title>
    <!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
            DELETE PRODUCTS
        </div>

            
        <div class="card-body">
            <h1>ARE YOU SURE DELETE PRODUCTS!!</h1>
                <form method ="post">
                    <div class="form-group">
                        <label> PRODUCT NAME : <?=$item['title']?> </label>
                        <input type="text" name="id" value = "<?=$item ['id']?>"style="display: none;">
                    </div>

                    <div class="form-group">
					    <button class="btn btn-danger">DELETE</button>
                        <p style="margin-top: 20px">
				            <a href="init.php">Back to list</a>
			             </p>
				    </div>
                </form>
        </div>
    </div>
</div>

</body>
</html>