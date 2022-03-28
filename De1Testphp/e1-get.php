<?php

$a= $b =$sum= $c ='';
  if(!empty($_GET)){
    if(isset($_GET['a']) & isset($_GET['b']) & isset($_GET['sum']) & isset($_GET['c'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $sum = $_GET['sum'];


        if($sum == 'sum' ){
            if($a == null && $b == null){
                echo "Please add a=NUMBER&b=NUMBER to the query string";
            } 
                else if ($a !=null && $b ==null) {
                    echo "'Please add b=NUMBER to the query string";
                } else if ($a ==null && $b !=null){
                    echo "Please add a=NUMBER to the query string";
                }
                else if(!is_numeric($a) && is_numeric($b) ){
                    echo "Please add a=NUMBER to the query string";
                }else if( is_numeric($a) && !is_numeric($b) ){
                    echo "Please add b=NUMBER to the query string";
                } else if( !is_numeric($a) && !is_numeric($b) ){
                    echo "Please add a = b=NUMBER to the query string"; 
                } else if ( is_numeric($a) &&  is_numeric($b)){
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
        <form method = "get" action="">
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