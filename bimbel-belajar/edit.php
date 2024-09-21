<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$data = mysqli_query($koneksi,"UPDATE user SET nama='$nama', email='$email', telp='$telp', alamat='$alamat', tanggal_lahir='$tanggal_lahir' where id='$id'" );

header("location:index.php");
?>