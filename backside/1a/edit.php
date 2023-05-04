<?php
include '../config.php';
$a = mysqli_query($conn, "SELECT * FROM tbl_scan JOIN tbl_siswa ON tbl_scan.NIS = tbl_siswa.NIS WHERE tbl_scan.NIS = '$_GET[nis]'");
$b = mysqli_fetch_array($a, MYSQLI_ASSOC)
?>
<form method="post">
    Student ID : <input type="text" name="student_id" placeholder="Insert Student ID" value="<?= $b['NIS'] ?>"><br><br>
    Name : <input type="text" name="name" placeholder="Insert Name" value="<?= $b['NAMA_LENGKAP']; ?>"><br><br>
    Status :
    <select name="status">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br><br>
    <input type="submit" name="update" value="Update">
    <input type="reset" name="cancel" value="Cancel">
</form>
<?php
if (isset($_POST['update'])) {
    include '../config.php';
    $status = $_POST['status'];

    $sql = "UPDATE tbl_scan SET STATUS='$status' WHERE NIS='$_GET[nis]'";
    if ($conn->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
        trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
    } else { // Jika berhasil alihkan ke halaman tampil.php
        echo "<script>alert('Update Success!')</script>";
        echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
    }
}

?>