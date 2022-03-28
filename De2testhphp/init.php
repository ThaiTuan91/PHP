<?php
session_start();
if(!empty($_POST)){
    require_once('db/dbhelper.php');
    require_once('utils/utility.php');

    $action = getPost('action');

    if($action == 'init'){
        initDB();

        execute(SQL_CREATE_DATABASE);
        execute(SQL_CREATE_TABLE_DEPARTMENT);
        execute(SQL_CREATE_TABLE_EMPLOYEE);
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INIT DATABASE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
                <!-- <li class="nav-item">
                    <a href="employeadd.php" class="nav-link">EMPLOYEE ADD</a>
                </li>
                <li class="nav-item">
                    <a href="departmentadd.php" class="nav-link">DEPARTMENT ADD</a>
                </li> -->
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 style = "text-align:center">INIT DATABASE</h1>

        <form method = "post"  style = "text-align:center">
            <button class = "btn btn-warning" name = "action" value= "init">STATR DATABASE</button>
        </form>
    </div>


</body>
</html>