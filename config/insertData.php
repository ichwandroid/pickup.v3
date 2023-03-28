<?php
include_once 'connect.php';

$nis= $_POST['Nis'];
$status = $_POST['Status'];
mysqli_query($database, "INSERT INTO tbl_scan VALUES('$nis', '$status', NOW())");
?>