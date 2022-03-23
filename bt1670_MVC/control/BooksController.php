<?php

require_once('../control/BaseController.php');
require_once('../models/Users.php');
require_once('../models/Books.php');

Class BooksControler extends BaseController{
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
        $this->view('book/add.php');
    }

    function post(){
        $u= new Books();
        $u->processForm();
        $u->save();

        $this->redirect('m=book');
    }

//    check login để xem danh sách
    function list(){

        $bookList = Books::list();
        $index = 0;

        $this->view('book/list.php', [
            'bookList' => $bookList,
            'index' => $index
        ]);
    }

    function confirmDelete(){
        $id = getPost('id');
        $b = new Books();
        $b->id = $id;
        $b->delete();

        $this->redirect('m=book');
    }


    function delete(){
        $id = getGet('id');
        $book = Books::find($id);

        $this->view('book/delete.php', [
            'book' => $book
        ]);
    }

    function edit(){
        $id = getGet('id');
        $book = Books::find($id);

        $this->view('book/edit.php', [
            'book' => $book
        ]);
    }
    
}