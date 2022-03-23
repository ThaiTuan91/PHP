<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1 >Quản lý Sách</h1>
    <br>

    <div class="container-fluid">

        <table class="table table-bordered" >

            <thead> 
                <tr>
                <th>Số thứ tự</th>
                <th>Tên Sách</th>
                <th>Tác Giả</th>
                <th>Giá</th>
                <th>Nhà SXt</th>
            </tr>
        </thead>

    <tbody>
            <?php
              $N = rand(3,15);
             $Ql_Book = array();
        
             for ($i=0; $i < $N; $i++) { 
                    $Name_Book = $i+1;
                    $Author_Book = $i+1;
                    $Price= ($i+1) *100;
                    $Publisher = $i+1;
                    $book = array("Tên Sách"=>$Name_Book .'<br>', "Tác Giả"=> $Author_Book .'<br>', "Giá"=> $Price .'<br', "Nhà SX" => $Publisher .'<br>');
                    $Ql_Book[] = $book;
              }
                    $index =0;
             foreach ($Ql_Book as $key => $Ql_Book)
             {
                 echo '<tr>
                    <td>'.(++$index).'</td>
                    <td>'.$Ql_Book["Tên Sách"].'</td>
                    <td>'.$Ql_Book["Tác Giả"].'</td>
                    <td>'.$Ql_Book["Giá"].'</td>
                    <td>'.$Ql_Book["Nhà SX"].'</td>
                </tr>';     
             }
            ?>
     </tbody>

     </table>

    </div>
</body>
</html>