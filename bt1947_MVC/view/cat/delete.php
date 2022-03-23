<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE PAGE</title>
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
                    <a href="?m=cat&action=list" class="nav-link">CATEGORY</a>
                </li>
                <li class="nav-item">
                    <a href="?m=product&action=list" class="nav-link">PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link"></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 style= "text-align : center; color: red"> DELETE WARNING!</h1>
        <div class="card">
                <h2 style= "color: red">DELETE</h2>
                <p style= "color: red">Do you want to delete this?</p>
                <form method = "post" action="?m=cat&action=confirm-delete" >
                    <div class="form-group">
                        <label>Category Name: <?=$cats->catname?> </label>
                        <input  type="text" name = "id" class = "form-control" value = "<?=$cats->id?>" style = "display : none">
                    </div>
                    <div class="form-group">
                        <button class = "btn  btn-danger"> DELETE</button>
                    </div>
                </form>

        </div>
    </div>
</body>
</html>