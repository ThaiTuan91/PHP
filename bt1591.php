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
        echo $N;
        $sum =0;
        for ($i=0; $i <$N ; $i++) { 
           $sum += $i;
        }
        echo "<br>";
        echo "Tong cac so tu 1: =>".$N ."=" .$sum;
    ?>
</body>
</html>