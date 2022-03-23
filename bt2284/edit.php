<?php
session_start();
require_once('dbhelp.php');

$title = $thumbnail = $content = $create_at = $update_at = $price= $id= "";
if(!empty($_POST)){
    $title = getPost('title');
    $thumbnail = getPost('thumbnail');  
    $content = getPost('content');
    $create_at = getPost('create_at');
    $update_at = getPost('update_at');
    $price = getPost('price');
    $id = getPost('id');

    $query = "update  gifts set title ='$title', thumbnail = '$thumbnail', noidung = '$content', giatien ='$price', ngaytao = '$create_at', ngaysua = '$update_at' where id = '$id'  ";
    execute($query);
    header('Location: quantri.php');
}

$id = getGet('id');
if($id>0){
    $query = "select * from gifts where id = '$id'";
    $result = executeResult($query, true);

    $id = '';
    if($result!=null){
        $title = $result['title'];
        $thumbnail = $result['thumbnail'];
        $content = $result['noidung'];
        $create_at = $result['ngaytao'];
        $update_at = $result['ngaysua'];
        $price = $result['giatien'];
        $id = $result['id'];
    }else{
        $id = '';
    }
    if($id == ''){
        header('Location:quantri.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    <title>SỬA SẢN PHẦM</title>

    <style>
        .form-group{
            margin-top : 20px;
        }

        .container{
            margin-top : 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-info text white">
                    SỬA THÔNG TIN GIAN HÀNG
            </div>

            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label  >Title</label>
                        <input type="text" name ="id" value = "<?=$id?>">
                        <input type="text" name ="title" class="form-control" placeholder = "Entrer title" value = "<?=$title?>">
                    </div>

                    <div class="form-group">
                        <label  >Thumbnail</label>
                        <input type="text" name ="thumbnail" class="form-control" placeholder = "Entrer thumbnail" value = "<?=$thumbnail?>">
                    </div>

                    <div class="form-group">
                        <label  >Noi Dung</label>
                        <input type="text" name ="content" class="form-control" placeholder = "Entrer content" value = "<?=$content?>">
                    </div>

                    <div class="form-group">
                        <label  >Ngay Tao</label>
                        <input type="text" name ="create_at" class="form-control" placeholder = "Entrer create_at" value = "<?=$create_at?>">
                    </div>

                    <div class="form-group">
                        <label  >Ngay Sửa</label>
                        <input type="text" name ="update_at" class="form-control" placeholder = "Entrer update_at" value = "<?=$update_at?>">
                    </div>
                    
                    <div class="form-group">
                        <label  >Gia tiền</label>
                        <input type="number" name ="price" class="form-control" placeholder = "Entrer price" value = "<?=$price?>">
                    </div>

                    <div class="form-group">
                        <button class ="btn btn-success">SAVE</button>
                    </div>

                </form>
            </div>
        </div>

</body>
</html>