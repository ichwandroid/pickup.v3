<?php require_once "../../includes/db.php";
class user extends db
{
    public function load1a()
    {
        $query = "SELECT * FROM tbl_scan JOIN tbl_siswa ON tbl_scan.NIS = tbl_siswa.NIS WHERE tbl_siswa.KELAS LIKE '1 A - ZAINAB R.A' ORDER BY tbl_scan.TIMESCAN DESC";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        $out = "";
        $out .= "<h6 class='border-bottom pb-2 mb-0'>Recent Student Pickup Updates</h6>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nis = $row['NIS'];
            $nama = $row['NAMA_LENGKAP'];
            $kelas = $row['KELAS'];
            $panggilan = $row['PANGGILAN'];
            $status = $row['STATUS'];
            $waktu = $row['TIMESCAN'];
            $out .= "<div class='d-flex text-body-secondary pt-3'><h2><i class='bi bi-person-badge-fill'></i></h2>
			<div class='pb-3 mb-0 small lh-sm border-bottom w-100'><div class='d-flex justify-content-between'>
			<strong class='text-gray-dark'>$nama</strong><a href='edit.php?nis=$nis'>$status</a></div>
			<div class='d-flex justify-content-between'><span class='d-block'> $panggilan | $kelas</span><a href='#' style='text-decoration: none; color:gray; font-size:12px; padding-top:5px'>$waktu</a></div></div></div></div>";
        }
        $out .= "</table>";
        if ($stmt->rowCount() == 0) {
            $out = "";
            $out .= "<p class='alert alert-info text-center col-sm-5 mx-auto'>No records yet. its time to add new!</p>";
        }
        return $out;
        return $out;
    }
}
