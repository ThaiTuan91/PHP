<?php
require_once('../control/BaseController.php');

Class IndexController extends BaseController{
    public function doRequest(){
            $this->view('home/index.php');
        }
}