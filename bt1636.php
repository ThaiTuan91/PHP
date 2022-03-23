<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $N = rand(1,100);
       $arraysapxep = array();
       for ($i=0; $i <$N; $i++) { 
           $array1 =  rand(1,100);
           $arraysapxep[] =   $array1;
       }
       sort($arraysapxep);
        print_r($arraysapxep);
       
    ?>
</body>
</html>