<?php
  include('connect.php');

  $sql = "SELECT * FROM tbl_scan JOIN tbl_siswa ON tbl_scan.NIS = tbl_siswa.NIS";

  $res = mysqli_query($database,$sql);

  // print_r($res);

  while($row = mysqli_fetch_assoc($res)){
    $data[]=$row;
  }

  echo json_encode($data);
?>

