<?php
require_once('../model/dbcontext.php');

Class Cats{
    public $id;
    public $catname;


    public function processForm(){
        $this->id = getPost('id');
        $this->catname = getPost('catname');
    }

    public function save(){
        if($this->id >0){
            $this->update();
        }else {
            $this->insert();
        }
    }

    public function insert(){
        $sql = "insert into cats (catname) values('".$this->catname."') ";
        execute($sql);
    }

    public function update(){
        $sql = "update cats set catname = '".$this->catname."' where id = ".$this->id;
        execute($sql);
    }

    public function delete(){
        $sql = "delete from cats where id = ".$this->id;
        execute($sql);
    }

    public static function find($id){

        $sql = "select * from cats where id  = $id";
        $item = executeResult($sql, true);

        $c = new Cats();
        $c->id = $item['id'];
        $c->catname = $item['catname'];

        return $c;
    }

    public static function list(){
        $sql = "select * from cats";
        $dataList = executeResult($sql);

        $catList = [];

        foreach($dataList as $item){
            $c = new Cats();
            $c->id = $item['id'];
            $c->catname = $item['catname'];

            $catList[]= $c;
        }
        return $catList;
    }
}