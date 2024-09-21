<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpbimbel2";

$koneksi = new mysqli($servername, $username, $password, $database);

if($koneksi->connect_error) {
die("Gagal Terkoneksi" . $koneksi->connect_error);
}

// echo "Berhasil Terhubung ke Database KIWWWWW";
?>