<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelammin = $_POST['jenis_kelammin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$data = mysqli_query($koneksi,"UPDATE praktek SET nama='$nama', umur='$umur', jenis_kelammin='$jenis_kelammin', telp='$telp', alamat='$alamat' where id='$id'" );

header("location:index.php");
?>