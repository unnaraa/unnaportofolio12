<?php

include 'koneksi.php';

$database = 'praktik_php';

$create = "CREATE DATABASE $database";

if($koneksi->query($create) === true) {
    echo " Database $database berhasil dibuat";
}else{
    echo "Gagal membuat Database";
}
$koneksi->close();

?>