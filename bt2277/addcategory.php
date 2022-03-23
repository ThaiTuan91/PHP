<?php
require_once('utils/utility.php');
require_once('db/dbhelper.php');

if(!empty($_POST)){
    $catname = getPost('catname');
    $id = getPost('id');

    if($id>0){
        $query = "update category set catname = '$catname' where id = '$id'";
    }else{
        $query = "insert into category (catname) values ('$catname') ";
    }

    execute($query);
   header('Location: category.php');
    die();
}

$id = getGet ('id');
$query = "select * from category where id = '$id'";
$item = executeResult($query, true);
$catname = $id = '';
if($item != null){
    $catname = $item['catname'];
    $id = $item['id'];  
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
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
              CATEGORY INFOR
        </div>
    
        <div class="card-body">
                <form method ="post">
                    <div class="form-group">
                        <label> CATEGORY NAME </label>
                        <input required type = "text" name = "catname" class ="form-control" placeholder ="input  Category name" value = "<?=$catname?>">
                        <input type="text" name="id" value = "<?=$id?>"style="display: none;">
                    </div>

                    <div class="form-group">
					    <button class="btn btn-success">Submit</button>
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