<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelammin = $_POST['jenis_kelammin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO praktek VALUES ('$id', '$nama', '$umur', '$jenis_kelammin', '$telp', '$alamat')");

header('location:index.php');

?>