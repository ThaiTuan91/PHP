<?php
    session_start();
    if(!empty($_POST)){  
        require_once('utils/utility.php');
        require_once('db/dbhelper.php');
    
        $action = getPost('action');
        if($action =='init'){
    
            initDB();
    
            execute(SQL_CREATE_DATABASE);
            execute(SQL_CREATE_TABLE_CATEGORY);
            execute(SQL_CREATE_TABLE_PRODUCTS);
        }
    }
   
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INIT DB</title>

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

    <h1 style = "text-align:center">
            INIT DATABASE 
            <form method = "post">
                    <button class = "btn btn-warning" name = "action" value = "init">START INIT DATABASE</button>
                </form>


        </h1>
</body>
</html>