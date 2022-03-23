<?php

require_once('db/dbhelper.php');
require_once('utils/utility.php');

if(!empty($_POST)){
    $id = getPost('id_emp');
   
    $sql = "delete from departments where id = '$id'";
    execute($sql);

    header('Location:department.php');
    die();
  

}

$id = getGet('id');
$sql = "select * from departments where id = '$id' ";
$item = executeResult($sql, true);

if($item==null){
    header('Location:department.php');
    die();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE DEPARTMENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        .form-group{
            margin-bottom: 20px;
        }
    </style>


</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="init.php" class="nav-link">INIT DATABASE</a>
                </li>
                <li class="nav-item">
                    <a href="employee.php" class="nav-link">EMPLOYEE</a>
                </li>
                <li class="nav-item">
                    <a href="department.php" class="nav-link">DEPARTMENT</a>
                </li>
                <li class="nav-item">
                    <a href="employeadd.php" class="nav-link">EMPLOYEE ADD</a>
                </li>
                <li class="nav-item">
                    <a href="departmentadd.php" class="nav-link">DEPARTMENT ADD</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h2>DELETE DEPARTMENT</h2>
            </div>

            <div class="card-body">
                <form method ="post">

                    <div class="form-group">
                        <label >DEPARTMENT NAME :<?=$item['name']?> </label>
                        <input  type="text" name = "id_emp"  value ="<?=$item['id']?>"  style ="display: none;">
           
                    <div class="form-group">
                        <button class = "btn btn-danger">DELETE</button>
        
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>