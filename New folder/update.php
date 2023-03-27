<?php
require_once "config.php";

$nis = $_POST["NIS"];
$status = $_POST["Status"];

$sql = "UPDATE tbl_scan SET STATUS='$status' WHERE NIS='$nis'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>