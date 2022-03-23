<?php

require_once('../control/BaseController.php');
require_once('../model/Cats.php');

Class CatControler extends BaseController{
    function doRequest(){
        $action = getGet('action');

        switch ($action) {
            case 'view':
                $this->show();
                break;
            case 'post':
                $this->post();
                break;           
            case 'delete':
                $this->delete();
                break;
            case 'confirm-delete':
                 $this->confirmDelete();
                 break;
            case 'edit':
                $this->edit();
                break;
            case 'list':
                $this->list();
                 break;
            default ;
                $this->list();
                break;
            }
    }

    function show(){
        $this->view('cat/add.php');
    }

    function post(){
        $c= new Cats();
        $c->processForm();
        $c->save();

        $this->redirect('m=cat');
    }


    function list(){

        $catList = Cats::list();
        $index = 0;

        $this->view('cat/list.php', [
            'catList' => $catList,
            'index' => $index
        ]);
    }

    function confirmDelete(){
        $id = getPost('id');
        $c = new Cats();
        $c->id = $id;
        $c->delete();

        $this->redirect('m=cat');
    }


    function delete(){
        $id = getGet('id');
        $cats = Cats::find($id);

        $this->view('cat/delete.php', [
            'cats' => $cats
        ]);
    }

    function edit(){
        $id = getGet('id');
        $cats = Cats::find($id);

        $this->view('cat/edit.php', [
            'cats' => $cats
        ]);
    }
    
}