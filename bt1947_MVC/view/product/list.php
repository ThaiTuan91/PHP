<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATEGORY PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        .form-group{
            margin-bottom: 20px;
        }
    </style>
    
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="?" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="?m=cat&action=view" class="nav-link">CATEGORY</a>
                </li>
                <li class="nav-item">
                    <a href="?m=product&action=view" class="nav-link">PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link"></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 style= "text-align : center; color: green"> PRODUCT INFORMATION</h1>
        <div class="card">
            <div class="card-header bg-info  text-white">
                <h2> PRODUCT</h2>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th style ="width : 60px"></th>
                            <th style ="width : 60px"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                    foreach($productList as $item){
                        echo '  <tr>
                                <td>'.(++$index).'</td>
                                <td>'.$item->title.'</td>
                                <td style ="width : 60px">
                                <a href ="?m=product&action=edit&id='.$item->id.'"><button class ="btn btn-warning">EDIT</button>
                                </td>
                                <td style ="width : 60px">
                                <a href ="?m=product&action=delete&id='.$item->id.'"><button class ="btn btn-danger">DELETE</button>
                                </td>
                        </tr>';
                    }
                        ?>
                    </tbody>

                </table>

                <form method = "post" action="?m=product&action=view" >
                    <div class="form-group">
                        <button class = "btn  btn-success"> ADD NEW</button>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>