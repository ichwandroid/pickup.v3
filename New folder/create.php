<?php
require_once "config.php";

$nis = $_POST["NIS"];
$status = $_POST["Status"];
// $timescan = now();

$sql = "INSERT INTO tbl_scan (NIS, STATUS, TIMESCAN) VALUES ('$nis', '$status', now())";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error adding record: " . $conn->error;
}

$conn->close();
?>