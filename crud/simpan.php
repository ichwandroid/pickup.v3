<?php
include_once 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
mysqli_query($db, "INSERT INTO users VALUES('', '$nama', '$alamat')");
?>