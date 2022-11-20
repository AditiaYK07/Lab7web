<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDP Dasar</title>
</head>
<body>
    <h2> Form Input </h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="kirim">
    </form>
    <?php
    echo 'Selamat datang ' . $_POST[ 'nama' ];
    ?>
</body>
</html>