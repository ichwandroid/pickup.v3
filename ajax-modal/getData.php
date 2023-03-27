<?php
include_once 'koneksi.php';
$data_user = mysqli_query($db, "SELECT * FROM users");
?>

<h3 class="text-center mt-5">CRUD Ajax Sederhana</h3>

<table class="table table-bordered border-dark mt-5">
    <thead>
        <tr>
            <th style="display:none;">Id</th>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        while ($data = mysqli_fetch_assoc($data_user)) {
            $link_delete = "<a class='btn btn-danger mb-1 hapusData' href='deleteData.php?id=" . $data['id'] . "'>Delete</a>";
            $link_update = "<a class='btn btn-warning mb-1 updateData' data-bs-toggle='modal' data-bs-target='#editData' href='updateData.php?id=" . $data['id'] . "'>Update</a>";
        ?>
            <tr>
                <td style="display:none;"><?php echo $data['id']; ?></td>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['umur']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo "<center>$link_delete $link_update</center>"; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>