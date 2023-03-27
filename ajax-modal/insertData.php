<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlentities($_POST['nama'], ENT_QUOTES);
    $umur = htmlentities($_POST['umur'], ENT_QUOTES);
    $jenis_kelamin = htmlentities($_POST['jenis_kelamin'], ENT_QUOTES);

    mysqli_query($db, "INSERT INTO `users` (`nama`, `umur`, `jenis_kelamin`) VALUES('$nama', '$umur', '$jenis_kelamin');");
} else {
    header('HTTP/1.1 404 Not found');
}
