<?php
require_once('utils/utility.php');
require_once('db/dbhelper.php');


if(!empty($_POST)){
    $title = getPost('title');
    $price = getPost('price');
    $thumbnail = getPost('thumbnail');
    $content = getPost('content');
    $id = getPost('id');
    $id_cat = getPost ('id_cat');
    $createat = $updateat = date('Y-m-d H:i:s');
    

    if($id >0){
        $query = "update products set title = '$title', price = '$price', thumbnail = '$thumbnail', content = '$content', updateat = '$updateat', id_cat = '$id_cat' where id = '$id' ";
    }else{
        $query = "insert into products (title, price,thumbnail, content , createat, updateat, id_cat) values ('$title', '$price', '$thumbnail', '$content', '$createat', '$updateat', '$id_cat')";
    }

    execute($query);
}

$categoryList = executeResult('select * from category');

$id = getGet('id');
$query = "select * from products where id = '$id'";
$item = executeResult($query, true);
$title= $price= $thumbnail= $content= $id_cat = $id='';
if($item != null){
    $title = $item['title'];
    $price = $item['price'];
    $thumbnail =$item['thumbnail'];
    $content = $item['content'];
    $id_cat = $item['id_cat'];
    $id = $item['id'];
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD</title>
    <!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style type="text/css">
		.form-group {
			margin-bottom: 15px;
		}
	</style>

</head>
<body>
<div class="container">

    <div class="card">
        <div class="card-header bg-info text-white">
                PRODUCTS INFOR
        </div>

            <div class="card-body">
                <form method ="post">

                    <div class="form-group">
                        <label> TITLE </label>
                        <input type = "text" name = "title" class ="form-control" placeholder ="input ...." value = "<?=$title?>" >
                        <input type="text" name="id" value ="<?=$id?>" style="display: none;">
                    </div>

                    <div class="form-group">
                        <label> Price </label>
                        <input type = "num" name = "price" class ="form-control" placeholder ="input ...." value = "<?=$price?>" >
                    </div>
                    <div class="form-group">
                        <label> Thumbnail </label>
                        <input type = "text" name = "thumbnail" class ="form-control" placeholder ="input ...."  value = "<?=$thumbnail?>">
                    </div>
                    <div class="form-group">
                        <label> Content </label>
                        <textarea class="form-control" rows="10" name="content"><?=$content?></textarea>
                    </div>
                    
                     <div class="form-group">
                        <label> CATEGORY NAME </label>
                       <select class="form-group" name="id_cat">
                           <option value="">--CATEGORYNAME--</option>
                           <?php
                            foreach ($categoryList as $item){
                                if($item['id'] == $id_cat){
                                    echo '<option selected value = "'.$item['id'].'">'.$item['catname'].'</option>';
                                }else{
                                    echo '<option  value = "'.$item['id'].'">'.$item['catname'].'</option>';
                                }
                        }

                       ?>
                       </select>
                      
                    </div>

                    <div class="form-group">
					    <button class="btn btn-success">Submit</button>
                        <p style="margin-top: 20px">
				            <a href="products.php">Back to list</a>
			             </p>
				    </div>
				    </div>
                </form>
         </div>
    </div>
</div>

</body>
</html>