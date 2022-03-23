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
</head>
<body>
    <nav class = "navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
           <ul class= "navbar-nav">
               <li class ="nav-item">
                   <a class="nav-link" href="?m=users">Users</a>
                </li>
               <li class ="nav-item">
                   <a class="nav-link" href="?m=notes">NOTES</a>
                </li>
           </ul>
        </div>
    </nav>

    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>No</th>
                <th>FullName</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Address</th>
                <th style ="width : 60px;"></th>
                <th style ="width : 60px;"></th>
            </tr>
            </thead>
                
            <tbody>
                <?php
                   foreach ($userList as $item) {
                       echo '<tr>
                                <td>'.(++$index).'</td>
                                <td>'.$item->fullname.'</td>
                                <td>'.$item->email.'</td>
                                <td>'.$item->birthday.'</td>
                                <td>'.$item->address.'</td>
                                <td style ="width : 60px;">
                                <a href="?m=users&action=edit&id='.$item->id.'"><button class = "btn btn-warning">EDIT</button></a>
                                </td>
                                <td style ="width : 60px;">
                                <a href="?m=users&action=delete&id='.$item->id.'"><button class = "btn btn-danger">DELETE</button></a>
                                </td>
                   </tr>';
                   } 

                ?>
               
            </tbody>
        </table>
        <a href="?m=users&action=view"><button class="btn btn-success">AddNew</button></a>
    </div>
</body>
</html>