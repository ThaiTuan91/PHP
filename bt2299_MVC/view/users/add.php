
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
        <form method ="post" action="?m=users&action=post">
            <div class="form-group">
                <label for="">FullName:</label>
                <input required  type="text" name="fullname" class = "form-control">
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input required  type="email" name="email" class = "form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Address:</label>
                <input required  type="text" name="address" class = "form-control" id="">
            </div>  
            <div class="form-group">
                <label for="">Birthday:</label>
                <input required  type="date" name="birthday" class = "form-control" id="">
            </div>
            <div class="form-group">
                <button class ="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>