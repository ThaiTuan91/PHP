<?php
require_once('../utils/utility.php');

$m = getGet('m');
$controller = null;

switch ($m) {
    case 'cat':
        require_once('../control/CatControler.php');
        $controller = new CatControler();
        break;
    case 'product':
        require_once('../control/ProductController.php');
        $controller = new ProductController();
        break;
    default:
        require_once('../control/IndexController.php');
        $controller = new IndexController();
        break;
}

if($controller!=null){
    $controller->doRequest();
}