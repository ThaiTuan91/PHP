<?php
session_start();
if(!empty($_POST)){
    require_once('utils/utility.php');
    require_once('db/dbhelper.php');

    $action  = getPost('action');
    if($action == 'init'){
        initDB();

        execute(SQL_CREATE_TABLE_PRODUCTS);
        execute(SQL_CREATE_TABLE_ORDERS);
        execute(SQL_CREATE_TABLE_ORDER_DETAIL);

        // fake du lieu
        // for ($i=0; $i < 20; $i++) {
		// 	$title = 'San pham '.$i;
		// 	$price = 1000 + 10*$i;
		// 	$thumbnail = 'https://gokisoft.com/uploads/stores/49/2021/10/coding-c-program.jpg';
		// 	$content = 'Noi dung '.$i;
		// 	$create_at = date('Y-m-d H:i:s');
		// 	$update_at = date('Y-m-d H:i:s');

		// 	$sql = "insert into products(title, price, thumbnail, content, create_at, update_at) values ('$title', '$price', '$thumbnail', '$content', '$create_at', '$update_at')";
		// 	execute($sql);
		// }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- !-- Bootstrap -> thiet ke GUI --> 
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
        <a class="nav-link" href="cart.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">Checkout</a>
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