<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD BOOK PAGE</title>
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
        <a href="?m=book&action=view"><button class ="btn btn-success"> Add New Book</button></a>
       <table class="table table-bordered">
           <thead>
               <tr>
                   <th>No</th>
                   <th>Book Name</th>
                   <th>Author</th>
                   <th>Price</th>
                   <th>Producer</th>
                   <th style= "width:60px"></th>
                   <th style= "width:60px"></th>
               </tr>
           </thead>

           <tbody>
               <?php
               foreach($bookList as $item){
                   echo ' <tr>
                            <td>'.(++$index).'</td>
                            <td>'.$item->bookname.'</td>
                            <td>'.$item->author.'</td>
                            <td>'.$item->price.'</td>
                            <td>'.$item->producer.'</td>
                            <td style= "width:60px">
                                <a href="?m=book&action=edit&id='.$item->id.'"><button class ="btn btn-warning">Edit</button></a> 
                                </td>
                            <td style= "width:60px">
                            <a href="?m=book&action=delete&id='.$item->id.'"><button class ="btn btn-danger">Delete</button></a> 
                                </td>
               </tr>';
               };

               ?>
              
           </tbody>
       </table>
       
       <form method ="post" action="?m=user&action=logout">
           <button class ="btn btn-dark">LOGOUT</button>
        </form>
        
              
    </div>
    
</body>
</html>