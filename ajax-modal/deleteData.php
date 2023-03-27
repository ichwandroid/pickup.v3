<?php
require 'koneksi.php';
$queryDelete = "DELETE FROM users WHERE id = " . $_GET['id'];
mysqli_query($db, $queryDelete);
