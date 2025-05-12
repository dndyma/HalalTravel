<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../feature/admin.php" method='POST' enctype='multipart/form-data'>
        <input type="text" placeholder='tittle' name='tittle'>
        <input type="file" value='gambar' name='gambar'>
        <input type="text" placeholder='lokasi' name='lokasi'>
        <input type="text" placeholder='harga' name='harga'>
        <input type="text" placeholder='rating' name='rating'>
        <input type="submit" value='simpan' name='simpan'>
    </form>
</body>
</html>