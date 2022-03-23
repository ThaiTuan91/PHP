<?php

require_once('../control/BaseController.php');

require_once('../model/Products.php');

Class ProductController extends BaseController{
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
        $this->view('product/add.php');
    }

    function post(){

        $p= new Products();
        $p->processForm();
        $p->save();

        $this->redirect('m=product');
    }


    function list(){

        $productList = Products::list();
        $index = 0;

        $this->view('product/list.php', [
            'productList' => $productList,
            'index' => $index
        ]);
    }

    function confirmDelete(){
        $id = getPost('id');
        $p = new Products();
        $p->id = $id;
        $p->delete();

        $this->redirect('m=product');
    }


    function delete(){
        $id = getGet('id');
        $product = Products::find($id);

        $this->view('product/delete.php', [
            'product' => $product
        ]);
    }

    function edit(){
        $id = getGet('id');

        $product = Products::find($id);

        $this->view('product/edit.php', [
            'product' => $product,

        ]);
    }
    
}