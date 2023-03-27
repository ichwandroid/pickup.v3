<?php
require_once "config.php";

$nis = $_POST["nis"];

$sql = "SELECT * FROM tbl_scan WHERE NIS='$nis'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo "Record not found";
}

$conn->close();
?>
