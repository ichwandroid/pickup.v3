<?php
include_once 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$queryUpdate = "UPDATE users SET nama='$nama', alamat='$alamat' WHERE id = " . $_GET['id'];
mysqli_query($db, $queryUpdate);
?>