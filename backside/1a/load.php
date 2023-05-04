<?php
include '../config.php';
$text = "1 a";
$sql = mysqli_query($conn, "SELECT * FROM tbl_scan JOIN tbl_siswa ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS LIKE '$text%' ORDER BY tbl_scan.STATUS ASC");
foreach ($sql as $row) {
?>
    <tr>
        <td><?php echo $row['NIS']; ?></td>
        <td><?php echo $row['NAMA_LENGKAP']; ?></td>
        <td><?php echo $row['STATUS']; ?></td>
        <td><a href="edit.php?nis=<?= $row['NIS']; ?>"><b>Edit</b></a></td>
    </tr>
<?php } ?>