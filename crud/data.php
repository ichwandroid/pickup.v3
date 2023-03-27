<?php
include_once 'koneksi.php';
$users = mysqli_query($db, "SELECT * FROM users");
$check = mysqli_num_rows($users);

if($check > 0){
    while($data = mysqli_fetch_assoc($users)){
        $link_delete = "<a class='hapusData' href='delete.php?id=" . $data['id'] . "'>Delete</a>";
        $link_update = "<a class='updateData' href='update.php?id=" . $data['id'] . "' nama='".$data['nama']."' alamat='".$data['alamat']."'  >Update</a>";
        echo "Nama : " . $data['nama']." , Alamat : " 
        . $data['alamat'] . " | $link_delete | $link_update <br/>";
    }
}

?>