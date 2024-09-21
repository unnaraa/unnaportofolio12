<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM praktek WHERE id='$id'");
if (mysqli_num_rows($data) > 0) {
while ($praktek = mysqli_fetch_array($data)) {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <h1>Silahkan masukkan data yang benar</h1>

    <form action="edit.php" method="post">

    <input type="hidden" name="id" value="<?php print $praktek['id'] ?> ">

    <form action="create.php" method="post">

        <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php print $praktek['nama'] ?> ">>
        <br>

        <label>Umur</label>
        <br>
        <input type="number" name="umur" value="<?php print $praktek['umur'] ?> ">>
        <br>

        <label>Jenis Kelamin</label>
        <br>
        <input type="text" name="jenis_kelammin" value="<?php print $praktek['jenis_kelammin'] ?> ">>
        <br>

        <label>No. Telp </label>
        <br>
        <input type="number" name="telp"  value="<?php print $praktek['telp'] ?> ">>
        <br>

        <label>Alamat</label>
        <br>
        <textarea name="alamat"><?php print $praktek['alamat'] ?></textarea>
        <br>

        <button type="submit">Save</button>
        

    </form>
    </form>
</body>
</html>

    <?php
}}
?>
