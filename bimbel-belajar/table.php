<?php 

include  'koneksi.php';

$create = "CREATE TABLE bimbel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(225) NOT NULL,
    jenjang VARCHAR(225) NOT NULL,
    kelas VARCHAR(225) NOT NULL,
    waktu VARCHAR(225) NOT NULL
)";

if($koneksi->query($create) === true) {
    echo "Tabel bimbel berhasil dibuat";
}else{
    echo "Gagal membuat table";
}

$koneksi->close();
?>