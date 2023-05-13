<h6 class='border-bottom pb-2 mb-0'>Result Searching...</h6>
<?php
include '../config.php';
$text = "2a";
$sql = mysqli_query($conn, "SELECT * FROM tbl_scan JOIN tbl_siswa ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS LIKE '$text%' ORDER BY tbl_scan.STATUS ASC");
foreach ($sql as $row) {
    $nis = $row['NIS'];
    $nama = $row['NAMA_LENGKAP'];
    $kelas = $row['KELAS'];
    $nama_kelas = $row['NAMA_KELAS'];
    $panggilan = $row['PANGGILAN'];
    $status = $row['STATUS'];
    $waktu = $row['TIMESCAN'];
?>
    <div class='d-flex text-body-secondary pt-3'>
        <h2><i class='bi bi-person-badge-fill'></i></h2>
        <div class='pb-3 mb-0 small lh-sm border-bottom w-100'>
            <div class='d-flex justify-content-between'>
                <strong class='text-gray-dark'><?= $nama ?></strong><a href="edit.php?nis=<?= $nis ?>"><?= $status ?></a>
            </div>
            <div class='d-flex justify-content-between'><span class='d-block'> <?= $panggilan ?> | <?= $kelas ?> - <?= $nama_kelas ?></span><a style='text-decoration: none; color:gray; font-size:12px; padding-top:5px'><?= $waktu ?></a></div>
        </div>
    </div>

<?php } ?>