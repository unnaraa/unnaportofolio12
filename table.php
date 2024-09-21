<?php 

include  'koneksi.php';

$create = "CREATE TABLE praktek (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(225) NOT NULL,
    umur int(225) NOT NULL,
    jenis_kelammin VARCHAR(225) NOT NULL,
    telp int(225) NOT NULL,
    alamat text(225) NOT NULL
)" ;
 
if($koneksi->query($create) === true) {
    echo "Tabel bimbel berhasil dibuat";
}else{
    echo "Gagal membuat table";
}

$koneksi->close();
?>