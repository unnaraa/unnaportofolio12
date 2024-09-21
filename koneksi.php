<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "praktik_php";

$koneksi = new mysqli($servername, $username, $password, $database);

if($koneksi->connect_error) {
die("Gagal Terkoneksi" . $koneksi->connect_error);
}

// echo "Berhasil Terhubung ke Database";
?>