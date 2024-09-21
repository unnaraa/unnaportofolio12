<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <h1>Form Pendaftaran Bimbel</h1>

    <form action="create.php" method="post">
        <label>Nama Lengkap Antunna</label>
        <br>
        <input type="text" name="nama">
        <br>

        <label>Email Antunna</label>
        <br>
        <input type="email" name="email">
        <br>

        <label>No. Telp Antunna</label>
        <br>
        <input type="number" name="telp">
        <br>

        <label>Tanggal Lahir Antunna</label>
        <br>
        <input type="date" name="tanggal_lahir">
        <br>

        <label>Alamat Antunna</label>
        <br>
        <textarea name="alamat"></textarea>
        <br>

        <button type="submit">Save</button>
        

    </form>
</body>
</html>

