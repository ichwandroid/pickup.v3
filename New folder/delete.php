<?php
require_once "config.php";

$nis = $_POST["NIS"];

$sql = "DELETE FROM tbl_scan WHERE NIS=$nis";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>