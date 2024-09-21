<?php

// Create = proses menambahkan atau input data

// GET buat ambil data / liat data

// POST manipulasi/input data / nambahin data  / masukkin data

// PUT  buat edit data (update)

include 'koneksi.php';

// $namaVariable jadi terserah = $_POST['namaField'];
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];

mysqli_query($koneksi, "INSERT INTO user values('$id', '$nama', '$email', '$telp', '$alamat', '$tanggal_lahir')");

header('location:index.php');

?>