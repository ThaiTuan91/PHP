<?php

$a= $b =$sum= $c ='';
  if(!empty($_POST)){
    if(isset($_POST['a']) & isset($_POST['b']) & isset($_POST['sum']) & isset($_POST['c'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $sum = $_POST['sum'];

        if($sum == 'sum' ){
            if($a == null && $b == null){
                echo "<script> alert ('Please add a=NUMBER&b=NUMBER to the query string')</script>";
            } 
            else if ($a !=null && $b ==null) {
                echo "<script> alert ('Please add b=NUMBER to the query string')</script>";
            } else if ($a ==null && $b !=null){
                echo "<script> alert ('Please add a=NUMBER to the query string')</script>";
            }
            else if(!is_numeric($a) && is_numeric($b) ){
                echo "<script> alert ('Please add a=NUMBER to the query string' )
                </script>";
            }else if( is_numeric($a) && !is_numeric($b) ){
                echo "<script> alert ('Please add b=NUMBER to the query string')
                </script>";
            } else if( !is_numeric($a) && !is_numeric($b) ){
                echo "<script> alert ('Please add a = b=NUMBER to the query string ' )
                </script>";  
            }else if ( is_numeric($a) &&  is_numeric($b)){
                $c =$a + $b;
            } 
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
</head>
<body>
    <div class="container">
        <form method = "post" action="">
            <div class="form-group">
                <input type="text" name = "a" value ="<?=$a?>">
               <button class = "btn btn-success" name ="sum" value = "sum">+</button>
                <input type="text" name = "b" value="<?=$b?>">
                =
               <input type="text" name = "c" value ="<?=$c?>">
 
        </form>
    </div>
</body>
</html>