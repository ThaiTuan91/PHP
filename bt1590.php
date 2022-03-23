<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Danh sach Sinh Vien</title>
</head>
<body>
    <?php
    $Fullname = 'Cao Thai Tuan';
    $Address = 'Ha Noi';
    $email = 'tuan@gmail.com';
    $SĐT = '0986682872';
     echo "
    <div class=\"container-fluid\">
        <table class=\"table table-bordered\" >
            <thead> 
                <tr>
                <td>Họ và tên</td>
                <td>Địa chỉ</td>
                <td>Email</td>
                <td>Sđt</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>$Fullname</td>
                <td>$Address</td>
                <td><a href=\"mailto:$email\" target=\"_blank\"> $email</td>
                <td><a href=\"tel:$SĐT\" target=\"_blank\"> $SĐT</td>
            </tr>
        </tbody>
        </table>
    </div>"
    ?>

</body>
</html>
