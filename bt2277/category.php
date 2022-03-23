<?php
require_once('utils/utility.php');
require_once('db/dbhelper.php');
$query = "select * from category";
$dataList = executeResult($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATAGORY</title>

    <!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="init.php">Init DB</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="category.php">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addcategory.php">ADD CATEGORY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addproduct.php">ADD PRODUCTS</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
  
<table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Category Name</th>
                <th style="width: 60px"></th>
				<th style="width: 60px"></th>
            </tr>
        </thead>
        <tbody>
            <?php

				$index =0;
				foreach($dataList as $item) {
                    echo '<tr>
                            <td style="width: 50px">'.(++$index).'</td>
                            <td>'.$item['catname'].'</td>
                            <td style="width: 60px">
                            <a href = "addcategory.php?id='.$item['id'].'"><button class="btn btn-warning">Edit</button>
                            </td>
                            <td style="width: 60px">
                            <a href = "deletecat.php?id='.$item['id'].'"><button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>';
                }
				
        ?>
    </tbody>
 
	</table>
    <div class="card-body">
    <a href = "addcategory.php?id='.$item['id'].'"><button class="btn btn-danger">ADDNEW</button>
    </div>
</div>
   
</body>
</html>