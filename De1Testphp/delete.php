<?php
  require_once('dbhelper.php');
  require_once('config.php');

  if(!empty($_POST)){

    $id = getPost('id');

    $sql = "delete from user_info where id ='$id'";
    execute($sql);
    header('Location:e5-list.php');

  }

  $id = getGet('id');
 
    $sql = "select * from user_info where id = '$id' ";
    $item = executeResult($sql, true);

    if($item==null){
  
        header('Location:e5-list.php');
        die();
    }

  
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE USER</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <style>
        .form-group{
            margin-bottom: 20px;
        }        
    </style>

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-white bg-info">
                <p>DELETE USER </p>

            </div>

            <div class="card-body">
                <form method = "post">
                <div class="form-group">
                    <label for="">Username: <?=$item['username']?></label>
                   <input type="text" name = "id" style ="display:none;" value ="<?=$item['id']?>">
                </div>
                <div class="form-group">
                <button class = "btn btn-success">DELETE</button>
                </div>      
                </form>

            </div>

        </div>
    </div>
</body>
</html>