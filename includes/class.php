<?php require_once "db.php";
class user extends db
{
	// insert data
	public function insert($n, $s)
	{
		$query = "INSERT INTO tbl_scan(NIS,STATUS,TIMESCAN) VALUES(?,?,now()) ";
		$stmt = $this->connect()->prepare($query);
		if ($stmt->execute([$n, $s])) {
			echo "Registered Successfully!";
		}
	}

	// load data
	public function load()
	{
		$query = "SELECT * FROM tbl_scan JOIN tbl_siswa ON tbl_scan.NIS = tbl_siswa.NIS ORDER BY tbl_scan.TIMESCAN DESC";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute();
		$out = "";
		$out .= "<h6 class='border-bottom pb-2 mb-0'>Recent Student Pickup Updates</h6>";
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$nama = $row['NAMA_LENGKAP'];
			$kelas = $row['KELAS'];
			$panggilan = $row['PANGGILAN'];
			$status = $row['STATUS'];
			$waktu = $row['TIMESCAN'];
			$out .= "<div class='d-flex text-body-secondary pt-3'><h2><i class='bi bi-person-badge-fill'></i></h2>
			<div class='pb-3 mb-0 small lh-sm border-bottom w-100'><div class='d-flex justify-content-between'>
			<strong class='text-gray-dark'>$nama</strong><a href='#'>$status</a></div>
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

	// search data
	public function search($text)
	{
		$text = strtolower($text);
		$query = "SELECT * FROM tbl_scan JOIN tbl_siswa ON tbl_scan.NIS = tbl_siswa.NIS WHERE NAMA_LENGKAP LIKE ? OR KELAS LIKE ? OR PANGGILAN LIKE ? ";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$text, $text, $text]);
		$out = "";
		$out .= "<h6 class='border-bottom pb-2 mb-0'>Result Searching...</h6>";
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$nama = $row['NAMA_LENGKAP'];
			$kelas = $row['KELAS'];
			$panggilan = $row['PANGGILAN'];
			$status = $row['STATUS'];
			$waktu = $row['TIMESCAN'];
			$out .= "<div class='d-flex text-body-secondary pt-3'><h2><i class='bi bi-person-badge-fill'></i></h2>
			<div class='pb-3 mb-0 small lh-sm border-bottom w-100'><div class='d-flex justify-content-between'>
			<strong class='text-gray-dark'>$nama</strong><a href='#'>$status</a></div>
			<div class='d-flex justify-content-between'><span class='d-block'> $panggilan | $kelas</span><a href='#' style='text-decoration: none; color:gray; font-size:12px; padding-top:5px'>$waktu</a></div></div></div></div>";
		}
		$out .= "</table>";
		if ($stmt->rowCount() == 0) {
			$out = "";
			$out .= "<p class='alert alert-danger text-center col-sm-3 mx-auto'>Not Found.</p>";
		}
		return $out;
	}

	// search data
	public function select($text)
	{
		$text = strtolower($text);
		$query = "SELECT * FROM tbl_scan JOIN tbl_siswa ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS LIKE ? ORDER BY tbl_scan.TIMESCAN DESC";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$text]);
		$out = "";
		$out .= "<h6 class='border-bottom pb-2 mb-0'>Result Searching...</h6>";
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$nis = $row['NIS'];
			$nama = $row['NAMA_LENGKAP'];
			$kelas = $row['KELAS'];
			$panggilan = $row['PANGGILAN'];
			$status = $row['STATUS'];
			$waktu = $row['TIMESCAN'];
			$out .= "<div class='d-flex text-body-secondary pt-3'><h2><i class='bi bi-person-badge-fill'></i></h2>
			<div class='pb-3 mb-0 small lh-sm border-bottom w-100'><div class='d-flex justify-content-between'>
			<strong class='text-gray-dark'>$nama</strong><a>$status</a></div>
			<div class='d-flex justify-content-between'><span class='d-block'> $panggilan | $kelas</span><a style='text-decoration: none; color:gray; font-size:12px; padding-top:5px'>$waktu</a></div></div></div></div>";
		}
		$out .= "</table>";
		if ($stmt->rowCount() == 0) {
			$out = "";
			$out .= "<p class='alert alert-danger text-center col-sm-3 mx-auto'>Not Found.</p>";
		}
		return $out;
	}
}
