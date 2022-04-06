<?php

require_once('db/dbhelper.php');
require_once('utils/utility.php');

if(!empty($_POST)){
    $id_emp = getPost('id_emp');
    $No_emp= getPost('No_emp');
    $name_emp = getPost ('name_emp');
    $age = getPost('age');
    $dept_id= getPost('dept_id');
    $sex= getPost('sex');

    if($id_emp > 0){
        $sql = "update employees set No_emp = '$No_emp', name_emp = '$name_emp' , age = '$age' , sex = '$sex', dept_id= '$dept_id'  where id_emp = '$id_emp' ";
    }else{
        $sql = "insert into employees (No_emp, name_emp, age, sex, dept_id ) values('$No_emp','$name_emp', '$age', '$sex', '$dept_id')";
    }
    execute($sql);
  

}

$deptList = executeResult('select * from departments');

$id_emp = getGet('id_emp');
$sql = "select * from employees where id_emp = '$id_emp' ";
$item = executeResult($sql, true);

$id_emp = $name_emp = $age = $sex = $dept_id = $No_emp = '';

if($item!=null){
    $id_emp = $item['id_emp'];
    $No_emp = $item['No_emp'];
    $name_emp = $item['name_emp'];
    $age = $item['age'];
    $sex = $item['sex'];
    $dept_id = $item['dept_id'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INIT DATABASE</title>
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
        <div class="card">
            <div class="card-header bg-info text-white">
                <h2>EMPLOYEE ADD</h2>
            </div>

            <div class="card-body">
                <form method ="post">
                <div class="form-group">
                        <label >No_Emp</label>
                        <input type="text" name ="id_emp"  value ="<?=$id_emp?>" style ="display: none;">
                        <input required type="text" name ="No_emp" class ="form-control" value ="<?=$No_emp?>">                      
                    </div>
                    <div class="form-group">
                        <label >EMPLOYEE NAME</label>
                        <input required type="text" name = "name_emp" class ="form-control" value ="<?=$name_emp?>">
                    </div>
                    <div class="form-group">
                        <label >AGE </label>                     
                        <input required type="number" name = "age" class ="form-control"  value ="<?=$age?>">
                    </div>
                    <div class="form-group">
                        <label >SEX </label>
                       <label for="">
                       <input required type="radio" class ="form-control" name = "sex" value ="Female">Female
                       </label>
                       <label for="">
                       <input required type="radio" class ="form-control" name = "sex" value ="Male">Male
                       </label>
                        <!-- <input required type="text" class ="form-control" name = "sex" value ="<?=$sex?>"> -->
                    </div>
                    <div class="form-group">
                        <label >DEPARTMENT NAME</label>
                        <select class ="form-control" name="dept_id">
                            <option value="">--SELECT--</option>
                            <?php
                                foreach($deptList as $item){
                                    if($item['id'] == $dept_id){
                                        echo' <option selected value="'.$item['id'].'">'.$item['name'].'</option>';
                                    }else{
                                        echo' <option  value="'.$item['id'].'">'.$item['name'].'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <button class = "btn btn-success">Sumbit</button>
                        <a href="employee.php">Back list Employees</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>