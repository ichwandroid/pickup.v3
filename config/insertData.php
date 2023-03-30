<?php

    include ('connect.php');

    // print_r($_POST);

    $nis    = $_POST['nis'];
    $status = $_POST['status'];

    $sql = "INSERT INTO tbl_scan (NIS, STATUS, TIMESCAN) VALUE ('$nis', '$status', now())";

    if (mysqli_query($database,$sql)) {
        echo "Success Added";
    } else {
        echo "Not Added";
    }
?>