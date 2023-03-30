<?php

    include('connect.php');

    $nis=$_POST['nis'];

    $sql="DELETE FROM tbl_scan WHERE NIS = '$nis'";

    if (mysqli_query($database,$sql)) {
        echo "Success Delete";
    } else {
        echo "Error Delete";
    }
?>