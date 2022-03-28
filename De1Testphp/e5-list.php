<?php
  require_once('dbhelper.php');
  require_once('config.php');
  $sql= "select *from user_info ";
  $datalist = executeResult($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST PAGE</title>
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
                <h1>Check list User</h1>
            </div>

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
                <a href="e5-manager.php">Add new</a>
            </div>

        </div>
    </div>
</body>
</html>