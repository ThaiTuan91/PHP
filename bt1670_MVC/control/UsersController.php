<?php

require_once('../control/BaseController.php');
require_once('../models/Users.php');

Class UsersController extends BaseController{
    function doRequest(){
        $action = getGet('action');

        switch ($action) {
            case 'resign':
                $this->resign();
                break;
            case 'post':
                $this->post();
                break;           
            case 'checkLogin':
                $this->checkLogin();
                break;
            case 'login':
                 $this->login();
                 break;
            case 'validateLogin':
                $this->validateLogin();
                break;
            case 'logout':
                $this->logout();
                break;
            }
    }

    function resign(){
        $this->view('user/resign.php');
    }

    function login(){
        $this->view('user/login.php');

        $u = new Users();
        $check = $u->validateLogin();

        if($check ==null){
            $this->view('user/login.php');
        }else{
            $this->redirect('m=book');
        }
    }

    function post(){
        $u= new Users();
        $u->processForm();
        $u->insert();

        $this->view('user/login.php');
    }
   

    function checkLogin(){
       
        $u = new Users();
        $u->processForm();
        $data = $u -> checkLogin();

        if($data!=null){
           
            echo ' <script>
                alert ("Login Success!!");
                </script>';
                $this->redirect('m=book');
        }else{
            echo ' <script>
                alert ("Login Fail!!");
                </script>';
            $this->view('user/login.php');
        }
    }

    function logout(){
        $this->view('user/login.php');
    }


}