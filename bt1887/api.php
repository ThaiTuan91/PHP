<?php
require_once('dbhelp.php');

$action = getPost('action');

switch ($action) {
	case 'delete':
		deleteUserFromDB();
		break;
}

function deleteUserFromDB() {
	$id = getPost('id');

	$query = "delete from form_users where id = '$id'";
	execute($query);
}