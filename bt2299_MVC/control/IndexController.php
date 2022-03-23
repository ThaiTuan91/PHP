<?php
require_once('ControlBase.php');

class IndexController extends ControllBase {
    public function doRequest(){
        $this -> view ('home/index.php');
    }
}