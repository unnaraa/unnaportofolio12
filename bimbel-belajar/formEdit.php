<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
while ($bimbel = mysqli_fetch_array($data)) {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <h1>Form Pendaftaran Bimbel</h1>

    <form action="edit.php" method="post">

    <input type="hidden" name="id" value="<?php print $bimbel['id'] ?> ">

        <label>Nama Lengkap Antunna</label>
        <br>
        <input type="text" name="nama" value="<?php print $bimbel['nama'] ?> ">>
        <br>

        <label>Email Antunna</label>
        <br>
        <input type="email" name="email" value="<?php print $bimbel['email'] ?> ">>
        <br>

        <label>No. Telp Antunna</label>
        <br>
        <input type="number" name="telp"  value="<?php print $bimbel['telp'] ?> ">>
        <br>

        <label>Tanggal Lahir Antunna</label>
        <br>
        <input type="date" name="tanggal_lahir" value="<?php print $bimbel['tanggal_lahir'] ?> ">>
        <br>

        <label>Alamat Antunna</label>
        <br>
        <textarea name="alamat"><?php print $bimbel['alamat'] ?></textarea>
        <br>

        <button type="submit">Save</button>
        

    </form>
</body>
</html>

    <?php
}
?>
