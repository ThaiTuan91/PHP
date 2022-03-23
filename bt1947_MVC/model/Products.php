<?php
require_once('../model/dbcontext.php');

Class Products{
    public $id;
    public $title;
    public $price;
    public $thumbnail;
    public $contect;
    // public $create_at;
    // public $update_at;
    public $cat_id;


    public function processForm(){
        $this->id = getPost('id');
        $this->title = getPost('title');
        $this->price = getPost('price');
        $this->thumbnail = getPost('thumbnail');
        $this->contect = getPost('contect');
        $this->cat_id = getPost('cat_id');
        // $this->create_at = $this->update_at = date('Y-m-d  H:i:s');

    }

    public function save(){
        if($this->id >0){
            $this->update();
        }else {
            $this->insert();
        }
    }

    public function insert(){
        $sql = "insert into product (title, price,thumbnail, contect,cat_id ) values('".$this->title."', '".$this->price."','".$this->thumbnail."','".$this->contect."', '".$this->cat_id."') ";
        execute($sql);
    }

    public function update(){
        $sql = "update product set title = '".$this->title."', price ='".$this->price.",thumbnail ='".$this->thumbnail.", contect ='".$this->contect." , cat_id= '".$this->cat_id."  where id = ".$this->id;
        execute($sql);
    }

    public function delete(){
        $sql = "delete from product where id = ".$this->id;
        execute($sql);
    }

    public static function find($id){

        $sql = "select * from product where id  = $id";
        $item = executeResult($sql, true);

        $p = new Products();
        $p->id = $item['id'];
        $p->title = $item['title'];
        $p->price = $item['price'];
        $p->thumbnail = $item['thumbnail'];
        $p->contect = $item['contect'];
        // $p->create_at = $item['create_at'];
        // $p->update_at = $item['update_at'];
        $p->cat_id = $item['cat_id'];

        return $p;
    }

    public static function list(){
        $sql = "select * from product";
        $dataList = executeResult($sql);

        $productList = [];

        foreach($dataList as $item){
            $p = new Products();
            $p->id = $item['id'];
            $p->title = $item['title'];
            $p->price = $item['price'];
            $p->thumbnail = $item['thumbnail'];
            $p->contect = $item['contect'];
            // $p->create_at = $item['create_at'];
            // $p->update_at = $item['update_at'];
            $p->cat_id = $item['cat_id'];
    
            $productList[]= $p;
        }
        return $productList;
    }
}