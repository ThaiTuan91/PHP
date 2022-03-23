<?php
require_once('../utils/utility.php');

$m = getGet('m');
$controler = null;

switch ($m) {
    case 'user':
        require_once('../control/UsersController.php');
       $controler = new UsersController();
        break;
    case 'book':
         require_once('../control/BooksController.php');
        $controler =  new BooksControler();
         break;
    default:
        require_once('../control/IndexController.php');
        $controler =  new IndexController();
        break;
}

if($controler!=null){
    $controler->doRequest();
}