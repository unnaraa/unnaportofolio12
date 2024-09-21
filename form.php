<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <h1>Form Pendaftaran</h1>

    <form action="create.php" method="post">
        <label>Nama</label>
        <br>
        <input type="text" name="nama">
        <br>
        
        <label>Umur</label>
        <br>
        <input type="number" name="umur">
        <br>

        <label>Jenis Kelamin</label>
        <br>
        <input type="text" name="jenis_kelammin">
        <br>

        <label>No. Telp </label>
        <br>
        <input type="number" name="telp">
        <br>

        <label>Alamat </label>
        <br>
        <textarea name="alamat"></textarea>
        <br>
        
        <button type="submit">Okeyy</button>
        

    </form>
</body>
</html>

