<?php require_once "class.php";
if (!empty($_POST)) {
	$user = new user;
	$user->insert($_POST['nis'], $_POST['status']);
}
