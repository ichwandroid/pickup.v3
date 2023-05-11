<?php require_once "class.php";
if (!empty($_POST)) {
    $user = new user;
    $user->client($_POST['nis'], $_POST['status'], $_POST['basic-url']);
}
