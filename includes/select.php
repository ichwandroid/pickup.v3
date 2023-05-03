<?php require_once "class.php";
if (isset($_POST['classroom'])) {
    $cr = $_POST['classroom'];
    $cr = "%" . $cr . "%";
    $usr = new user;
    $data = $usr->select($cr);
    echo $data;
}
