<?php
  require_once('dbhelper.php');
  if(!empty($_POST)){
    $username = getPost('username');
    $password = getPost('password');
    $id = getPost('id');

    if($id>0){
        $sql= "update user_info set username = '$username', password = '$password' where id = '$id'  ";
    }else{ 
        $sql = "insert into user_info (username, password) values('$username', '$password')";
    }

    execute($sql);
}

  $id = getGet('id');
  $sql = "select *from user_info where id = '$id' ";
  $item = executeResult($sql, true);
  $username= $password = $id ='';
  if($item!=null){
      $username = $item['username'];
      $password = $item['password'];
      $id = $item['id'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager PAGE</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <style>
        .form-group{
            margin-bottom: 20px;
        }        
    </style>

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-white bg-info">
                <p>Hi admin </p>
                <p>Please add new user</p>
            </div>

            <div class="card-body">
                <form method = "post">
                <div class="form-group">
                    <label>Username:</label>
                   <input type="text" name = "id" style ="display:none;" value ="<?=$id?>">
                    <input required type="text" name ="username" class ="form-control" value ="<?=$username?>" >
                </div>
                <div class="form-group">
                    <label>password:</label>
                    <input required type="password" name ="password" class ="form-control" value ="<?=$password?>">
                </div>

                <div class="form-group">
                <button class = "btn btn-success">Add New</button>
                </div>      
                </form>
              
               <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th style ="width : 60px"></th>
                            <th style ="width : 60px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $sql= "select *from user_info ";
                         $datalist = executeResult($sql);
                            $index=0;
                            foreach($datalist as $item){
                                echo '<tr>
                                    <td>'.(++$index).'</td>
                                    <td>'.$item['username'].'</td>
                                    <td style ="width : 60px">
                                    <a href = "e5-manager.php?id ='.$item['id'].'"><button class = "btn btn-warning">Update</button>
                                    </td>
                                    <td style ="width : 60px">
                                    <a href = "delete.php?id ='.$item['id'].'"><button class = "btn btn-danger">Remove</button>
                                    </td>
                            </tr>';
                            }
                        ?>
                      
                    </tbody>
                </table>
            </div>

        </div>
    </div>
                <a href="e4-login.php">Logout</a>
            </div>

        </div>
    </div>
</body>
</html>