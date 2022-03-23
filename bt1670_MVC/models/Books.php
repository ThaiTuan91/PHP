<?php
require_once('dbcontex.php');

class Books{
    public $id;
    public $bookname;
    public $author;
    public $price;
    public $producer;


    public function processForm(){
        $this->id = getPost('id');
        $this->bookname = getPost('bookname');
        $this->author = getPost('author');
        $this->price = getPost('price');
        $this->producer = getPost('producer');
      
    }

    public function save(){
        if($this->id>0){
            $this->update();
        }else{
            $this->insert();
        }
    }

    public function insert(){
        $sql = "insert into books (bookname, author, price, producer) values('".$this->bookname."','".$this->author."', '".$this->price."', '".$this->producer."')";
        execute($sql);
    }

    public function update(){
        $sql = "update books set bookname= '".$this->bookname."', author ='".$this->author."', price ='".$this->price."', producer = '".$this->producer."' where id =".$this->id ;
        execute($sql);
    }

    public function delete(){
        $sql ="delete from books where id = ".$this->id;
        execute($sql);
    }

    public static function  find($id){
        $sql = "select * from books where id = $id";
        $item = executeResult($sql, true);

        $b = new Books();
        $b->id = $item['id'];
        $b->bookname = $item['bookname'];
        $b->author = $item['author'];
        $b->price = $item['price'];
        $b->producer = $item['producer'];

        return $b;
    }

    public static function list(){
        $sql = "select * from books";
        $dataList = executeResult($sql);

        $bookList = [];

        foreach($dataList as $item){
            $b = new Books();
            $b->id = $item['id'];
            $b->bookname = $item['bookname'];
            $b->author = $item['author'];
            $b->price = $item['price'];
            $b->producer = $item['producer'];

            $bookList[] = $b;
        }
        return $bookList;

    }



    // function checkLogin(){
    //     $sql = "select * from  users  where name_login = '".$this->name_login."' and password = '".$this->password."' ";
    //     $data = executeResult($sql, true);

    //     if($data!=null){
    //         $token = getMD5pwd($data['name_login'].time());

    //         $sql= "update users set token = '$token' where id = ".$data['id'];
    //         execute($sql);

    //         setcookie('token', $token, time()+ 7*24*60*60,'/');
    //     }

    //     return $data;
    // }

    // function validateLogin(){
    //     $token = '';
    //     if(isset($_COOKIE['token'])){
    //         $token = $_COOKIE['token'];

    //         $sql = "select *from users where token = '$token' ";

    //         $data = executeResult($sql, true);
    //          return $data;
    //     }

    //     return null;
    // }


}
