<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = htmlentities($_POST['nama'], ENT_QUOTES);
    $umur = htmlentities($_POST['umur'], ENT_QUOTES);
    $jenis_kelamin = htmlentities($_POST['jenis_kelamin'], ENT_QUOTES);

    mysqli_query($db, "UPDATE users SET nama='$nama', umur='$umur', jenis_kelamin='$jenis_kelamin' WHERE id = $id");
} else {
    header('HTTP/1.1 404 Not found');
}
