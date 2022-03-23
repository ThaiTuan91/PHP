<?php
session_start();

require_once('utils/utility.php');
require_once('db/dbhelper.php');

if(!isset($_SESSION['cart'])){
    $_SESSION['cart']= [];

}

if(!empty($_POST)){
    $id = getPost('id');
    for($i =0; $i < count($_SESSION['cart']); $i++){
        if($_SESSION['cart'][$i]['id']== $id){
            array_splice($_SESSION['cart'], $i, 1);
            break;
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
    <title>Document</title>

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
        <a class="nav-link" href="cart.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">Checkout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container" style = "padding : 20px">
    <div class = "row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Thumbnail</th>
                    <th>Title</th>
                    <th>price</th>
                    <th>Num</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $index = 0;
                    foreach ($_SESSION['cart'] as $item) {
                       echo ' <tr>
                                <td>'.(++$index).'</td>
                                <td><img src ="'.$item['thumbnail'].'" style = "witdth: 20px"></td>
                                <td>'.$item['title'].'</td>
                                <td>'.$item['price'].'</td>
                                <td><input type="number" min="0" max="100" value="'.$item['num'].'" class="form-control" style="width: 80px"/>
                                </td>
                            <td>
                                '.($item['price'] * $item['num']).'
                            </td>
                            <td>
                                <form method="post">
                                    <input type="number" name="id" value="'.$item['id'].'" class="form-control" style="width: 200px; display: none;">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                            </tr>';
                    }
                ?>
            </tbody>
        </table>
        <a href="checkout.php"><button class="btn btn-warning">Checkout</button></a>


    </div>
</div>
    
</body>
</html>