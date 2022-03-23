
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        .form-group{
            margin-bottom:  20px ; 
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Do You Want DELETE USERS??</h1>
        <form method ="post" action="?m=users&action=confirm-delete">
            <div class="form-group">
                <label for="">USERNAME: <?=$user->fullname?> </label>
                <input type="hidden" name ="id" value= "<?=$user->id?>">
            </div>
            <div class="form-group">
                 <button class ="btn btn-danger">DELETE</button>
            </div>
        </form>
    </div>
</body>
</html>