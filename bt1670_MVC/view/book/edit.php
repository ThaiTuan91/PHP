<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT BOOK PAGE</title>
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

<nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a href="?" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="?m=book" class="nav-link">BOOK</a>
                </li>
                <li class="nav-item">
                    <a href="?m=user&action=resign" class="nav-link">RESIGN</a>
                </li>
                <li class="nav-item">
                    <a href="?m=user&action=login" class="nav-link">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="card">

            <div class="card-header bg-info text-white  ">
            <h1>EDIT FORM</h1>
            </div>

            <div class="card-body">
                <form method= "post" action="?m=book&action=post">
                    <div class="form-group">
                        <label> Book Name</label>
                        <input type="hidden" name="id" class="form-control" value = "<?=$book->id?>">
                        <input required type="text" class="form-control" name= "bookname" value = "<?=$book->bookname?>" >
                    </div>
                    <div class="form-group">
                        <label> Author</label>
                        <input required type="text" class="form-control" name= "author" value = "<?=$book->author?>"> 
                    </div>
                    <div class="form-group">
                        <label> Price</label>
                        <input required type="number" class="form-control" name= "price" value = "<?=$book->price?>"> 
                    </div>
                    <div class="form-group">
                        <label> producer</label>
                        <input required type="text" class="form-control" name= "producer" value = "<?=$book->producer?>"> 
                    </div>
                    <div class="form-group">
             
                    <div class="form-group">
                        <button class ="btn btn-success">EDIT SUBMIT</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
    
</body>
</html>