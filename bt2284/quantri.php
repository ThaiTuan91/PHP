<?php
session_start();
require_once('dbhelp.php');

$user = validateLogin();
if($user == null){
    header('Location: login.php');
    die();
}

$title = $thumbnail = $content = $create_at = $update_at = $price= $id_user= "";
if(!empty($_POST)){
    $title = getPost('title');
    $thumbnail = getPost('thumbnail');  
    $content = getPost('content');
    $create_at = getPost('create_at');
    $update_at = getPost('update_at');
    $price = getPost('price');
    $id_user = $_SESSION['currentuser']['id'];

    $query = "insert into gifts (title, thumbnail, noidung, giatien, ngaytao, ngaysua, id_user) values('$title','$thumbnail', '$content','$price', $create_at, $update_at, '$id_user' )";
    execute($query);
}
 if(isset($_COOKIE['token'])){
     $token = $_COOKIE['token'];
     $querySelect = "select gifts.id, gifts.title, gifts.thumbnail, gifts.noidung, gifts.giatien, gifts.ngaytao, gifts.ngaysua
     from Users join gifts on Users.id = gifts.id_user
     where Users.token = '$token' ";
    
    $data = executeResult($querySelect);
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>QUAN TRI SAN PHAM</title>

    <style>
        .form-group{
            margin-top : 20px;
        }

        .container{
            margin-top : 40px;
        }
    </style>

    
<script>
    function deletegifts(id){
        var option = confirm('Đồng ý xóa sản phầm??')
        if(option){
            $.post('api.php', {
                'action': 'delete',
                'id': id
            }, function(data){
                location.reload()
            })
        }
    }
</script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-info text white">
                THÔNG TIN GIAN HÀNG
            </div>

            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label  >Title</label>
                        <input type="text" name ="title" class="form-control" placeholder = "Entrer title">
                    </div>

                    <div class="form-group">
                        <label  >Thumbnail</label>
                        <input type="text" name ="thumbnail" class="form-control" placeholder = "Entrer thumbnail">
                    </div>

                    <div class="form-group">
                        <label  >Noi Dung</label>
                        <input type="text" name ="content" class="form-control" placeholder = "Entrer content">
                    </div>

                    <div class="form-group">
                        <label  >Ngay Tao</label>
                        <input type="text" name ="create_at" class="form-control" placeholder = "Entrer create_at">
                    </div>

                    <div class="form-group">
                        <label  >Ngay Sửa</label>
                        <input type="text" name ="update_at" class="form-control" placeholder = "Entrer update_at">
                    </div>
                    
                    <div class="form-group">
                        <label  >Gia tiền</label>
                        <input type="number" name ="price" class="form-control" placeholder = "Entrer price">
                    </div>

                    <div class="form-group">
                        <button class ="btn btn-success">Confirm</button>
                    </div>

                </form>
            </div>
        </div>

        <table class = "table table-bordered">
                <thead>
                    <tr>
                        <th style = "withd :50px">STT</th>
                        <th>Title</th>
                        <th>thumbnail</th>
                        <th>Noi Dung</th>
                        <th>Ngay Tao</th>
                        <th>Ngay Sua</th>
                        <th>Gia </th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $index = 0;
                        foreach ($data as $item) {
                            echo '<tr>
                                    <td>'.(++$index).'</td>
                                    <td>'.$item['title'].'</td>
                                    <td>'.$item['thumbnail'].'</td>
                                    <td>'.$item['noidung'].'</td>
                                    <td>'.$item['ngaytao'].'</td>
                                    <td>'.$item['ngaysua'].'</td>
                                    <td>'.$item['giatien'].'</td>
                                    <td>
                                    <a href = "edit.php?id= '.$item['id'].'">
                                    <button class = "btn btn-warning">EDIT</button>
                                    </td>
                                    <td>
                                    <button class = "btn btn-danger" onclick = "deletegifts('.$item['id'].')">DELETE</button>
                                    </td>
                                </tr>';
                        }
                    ?>
                </tbody>
        </table>
        <a href="logout.php">LogOUT</a>
    </div>

</body>
</html>