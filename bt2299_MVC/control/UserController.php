<?php
require_once('ControlBase.php');
require_once('../models/Users.php');

class UserController extends ControllBase {
    public function doRequest() {
		$action = getGet('action');

		switch($action) {
			case 'view':
				$this->show();
			break;
			case 'post':
				$this->post();
			break;
			case 'edit':
				$this->edit();
			break;
			case 'delete':
				$this->delete();
			break;
			case 'confirm-delete':
				$this->confirmDelete();
			break;
			case '':
			case 'index':
				$this->index();
			break;
			default:
				$this->doAction($action);
			break;
        }

    }

    public function show(){
        $this->view('users/add.php');
    }

    public function post(){
        $u = new Users();
        $u -> processForm();
        $u -> save();
        
        $this->redirect('m=users');
    }

    public function edit(){
       $id = getGet('id');
       $user = Users::find($id);

       $this->view('users/edit.php' , [
           'user' => $user
       ]);
    }

    public function delete(){
        $id = getGet('id');
        $user = Users::find($id);

        $this->view('users/delete.php', [
            'user' =>$user
        ]);
    }

    public function confirmDelete(){
        $id = getPost('id');
        $u = new Users();
        $u ->id = $id;
        $u->delete();
        $this->redirect('m=users');
    }

    public function index(){
        $userList = Users::list();
        $index = 0;

        $this->view('users/list.php', [
            'userList' =>$userList,
            'index' =>$index
        ]);
    }


}