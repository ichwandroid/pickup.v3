<?php include '../config.php';
$load = mysqli_query($conn, "SELECT * FROM tbl_scan JOIN tbl_siswa ON tbl_scan.NIS = tbl_siswa.NIS WHERE tbl_scan.NIS = '$_GET[nis]'");
$show = mysqli_fetch_array($load, MYSQLI_ASSOC)
?>

<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/list-groups.css">

<div class="modal modal-sheet position-static d-block bg-body-secondary" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Confirmation Form <?php echo $show['PANGGILAN']; ?></h1>
            </div>

            <div class="modal-body p-5 pt-0">
                <form method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" value="<?php echo $show['NIS']; ?>" hidden>
                        <label for="floatingInput">NIS</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" placeholder="Student Name" value="<?php echo $show['NAMA_LENGKAP']; ?>" readonly>
                        <label for="floatingPassword">Student Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <div class="d-grid gap-2">
                            <?php
                            $url = $show['URL'];
                            if (empty($url)) {
                                echo ' ';
                            } else {
                                echo '<a href="' . $url . '" target="_blank" class="btn btn-success rounded-pill px-3">Lihat Posisi Driver</a>';
                            }
                            ?>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="form-floating mb-3">
                        <div class="list-group list-group-radio d-grid gap-2 border-0">
                            <div class="position-relative">
                                <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" name="status" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid1" value='<span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Menuju Titik Penjemputan</span>' checked="">
                                <label class="list-group-item py-3 pe-5" for="listGroupRadioGrid1">
                                    <strong class="fw-semibold">Confirm</strong>
                                    <span class="d-block small opacity-75">Siswa Menuju Titik Penjemputan</span>
                                </label>
                            </div>

                            <div class="position-relative">
                                <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" name="status" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid2" value='<span class="badge bg-warning-subtle border border-warning-subtle text-warning-emphasis rounded-pill">Sedang Mengerjakan Tugas</span>'>
                                <label class="list-group-item py-3 pe-5" for="listGroupRadioGrid2">
                                    <strong class="fw-semibold">Hold</strong>
                                    <span class="d-block small opacity-75">Siswa Sedang Mengerjakan Tugas</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" value="Update" name="update">Submit</button>
                    <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="../../js/bootstrap.bundle.min.js"></script>

<?php
if (isset($_POST['update'])) {
    include '../config.php';
    $status = $_POST['status'];

    $sql = "UPDATE tbl_scan SET STATUS='$status' WHERE NIS='$_GET[nis]'";
    if ($conn->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
        trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
    } else { // Jika berhasil alihkan ke halaman tampil.php
        echo '<script>alert("Update Success!");window.location.href="index.php";</script>';
        // echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
        // header("Location:index.php");
    }
}

?>