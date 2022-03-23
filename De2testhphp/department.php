<?php

require_once('db/dbhelper.php');
require_once('utils/utility.php');
$sql = "select * from departments";
$deptList = executeResult($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEPARTMENT PAGE</title>
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
                <h2>DEPARTMENT LIST</h2>
            </div>
        
            <table class=" table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>DEPARTMENT NAME</th>
                        <th style = "width : 60px"></th>
                        <th style = "width : 60px"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $index = 0;
                        foreach ($deptList as $item){
                            echo ' <tr>
                                    <td>'.(++$index).'</td>
                                    <td>'.$item['name'].'</td>
                                    <td style = "width : 60px"> 
                                    <a href="departmentadd.php?id='.$item['id'].'">  
                                    <button class ="btn btn-warning">EDIT</button>  
                                                                 
                                    </td >
                                    <td style = "width : 60px">
                                    <a href="deletedep.php?id='.$item['id'].'">
                                        <button class ="btn btn-danger">DELETE</button>
                                    </td>
                        </tr>';
                        }
                    ?>

                </tbody>
            </table>

            <div class="card-body">
                <a href="departmentadd.php?id='.$item['id'].'"> <button class="btn btn-success">Add New</button></a>
            </div>

        </div>
    </div>


</body>
</html>