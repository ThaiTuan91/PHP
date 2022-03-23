<?php
session_start();
require_once('db/dbhelper.php');
require_once('utils/utility.php');

$sql= 'select * from library';

$databook = executeResult($sql);

$search ='';
if(!empty($_POST)){
    $search = getPost('search');

    if(!empty($search)){
        $sql = "select * from library where ( title like '%$search%' or ISBN like '%$search%' or pub_year like '%$search%' )";
        $databook = executeResult($sql);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện sách</title>

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
                    <input type="search" name = "search" placeholder = "Tìm kiếm .....">
                    
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
        <table class ="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>authorid</th>
                    <th>title</th>
                    <th>ISBN</th>
                    <th>pub_year</th>
                    <th>avaliable</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $index = 0;
                    foreach($databook as $item){
                        echo ' <tr>
                                    <td>'.(++$index).'</td>
                                    <td>'.$item['authorid'].'</td>
                                    <td>'.$item['title'].'</td>
                                    <td>'.$item['ISBN'].'</td>
                                    <td>'.$item['pub_year'].'</td>
                                    <td>'.$item['avaliable'].'</td>
                                    <td>
                                    <button class ="btn btn-warning"> EDIT </button> 
                                    </td>
                                    <td>
                                    <button class ="btn btn-danger"> DELETE </button> 
                                    </td>
                    </tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>