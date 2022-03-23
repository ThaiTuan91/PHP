<?php
require_once('../utils/utiliti.php');

$m = getGet('m');
$controller = null;

switch ($m) {
    case 'users':
        require_once('../control/UserController.php');
        $controller = new UserController();
        break;
    case 'note':
        require_once('../control/NoteController.php');
        $controller = new NoteController();
         break;
    default:
        require_once('../control/IndexController.php');
        $controller = new IndexController();
        break;
}

if($controller!=null){
    $controller ->doRequest();
}