<?php require_once "class.php";
if (isset($_POST['q'])) {
	$q = $_POST['q'];
	$q = "%" . $q . "%";
	$usr = new user;
	$data = $usr->search($q);
	echo $data;
}
