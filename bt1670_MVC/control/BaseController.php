<?php

Class BaseController{
   public function doRequest(){}

   public  function view($path, $arr =[]){
        foreach($arr as $key=>$value){
            $$key = $value;
        }
        include_once('../view/'.$path);
    }

    public  function redirect($routeName){
        header('Location:?'.$routeName);
        die();
    }


}
