<?php

if(!empty($_POST)){
    require_once('utils/utility.php');
    require_once('db/dbhelper.php');
    $action  = getPost('action');
    if($action == 'init'){
        initDB();

        execute(SQL_CREATE_TABLE_LIBRARY);

        for($i=0; $i<10; $i++){
            $authorid = $i+1;
            $title = 'Book New'. $i;
            $ISBN = $i.'AERT'.$i+1;
            $pub_year = 2000+ $i+1;
            $avaliable = $i+1+ 10*$i;

            $sql= "insert into library (authorid, title, ISBN, pub_year, avaliable) values('$authorid', '$title', '$ISBN', '$pub_year', '$avaliable')";
            execute($sql);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INIT PAGE</title>
    <!-- !-- Bootstrap -> thiet ke GUI --> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<nav class ="navbar navbar-expand-sm bh-light navbar-light">
    <div class="container-fluid">
        <ul class= "navbar-nav">
           
            <li class="nav-item">
                <a href="lib.php" class="nav-link">LIBRARY BOOK</a>
            </li>
            <li class="nav-item">
                <a href="init.php" class="nav-link">INIT BOOK</a>
            </li>
            <li class="nav-item">
                <form method = "post">
                    <input type="text" name = "search" placeholder = "Tìm kiếm .....">
                </form>
            </li>

        </ul>
    </div>
</nav>
<h1 style ="text-align: center;">INIT DATABASE
        <form  method="post">
            <button class ="btn btn-warning" name ="action" value = "init">START DATABASE</button>
        </form>
</h1>
</body>
</html>