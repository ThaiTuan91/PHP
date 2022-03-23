<?php
require_once('dbcontex.php');

class Users{
    public $id;
    public $name_login;
    public $email;
    public $fullname;
    public $phone;
    public $password;

    function processForm(){
        $this->id = getPost('id');
        $this->name_login = getPost('name_login');
        $this->email = getPost('email');
        $this->fullname = getPost('fullname');
        $this->phone = getPost('phone');
        $this->password = getPost('password');
        $this->password = getMD5pwd($this->password);
    }

    function insert(){
        $sql = "insert into users (name_login, email, fullname, phone, password) values('".$this->name_login."','".$this->email."', '".$this->fullname."', '".$this->phone."', '".$this->password."')";
        execute($sql);
    }

    function checkLogin(){
        $sql = "select * from  users  where name_login = '".$this->name_login."' and password = '".$this->password."' ";
        $data = executeResult($sql, true);

        if($data!=null){
            $_SESSION['currentUser'] = $data;
            $token = getMD5pwd($data['name_login'].time());

            $sql= "update users set token = '$token' where id = ".$data['id'];
            execute($sql);

            setcookie('token', $token, time()+ 7*24*60*60,'/');
        }

        return $data;
    }

    function validateLogin(){
        if(isset($_SESSION['currentUser'])){
            return $_SESSION['currentUser'];
        }

        $token = '';
        if(isset($_COOKIE['token'])){
            $token = $_COOKIE['token'];

            $sql = "select *from users where token = '$token' ";

            $data = executeResult($sql, true);

            if ($data!=null) {
                $_SESSION['currentUser']= $data;
                return $data;
            }
             
        }
        return null;
    }


}
