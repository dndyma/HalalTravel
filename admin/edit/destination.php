<?php
include '../../db/koneksi.php';
$id=$_GET['id'];
if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $judul = $_POST['tittle'];
    $harga = $_POST['harga'];
    $rating = $_POST['rating'];
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi = $_POST['lokasi'];
    move_uploaded_file($tmp,'../../uploads/' .$gambar);
    $sql = "UPDATE destinasi set tittle='$judul',gambar='$gambar',lokasi='$lokasi',harga='$harga',rating='$rating',deskripsi='$deskripsi' where id_destinasi='$id'";
    $db->query($sql);
    header('location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/root.css">
    <link rel="stylesheet" href="../../assets/css/destination.css">
</head>

<body>
    <div class="sidebar">
        <div>
            <li>
                <h1>Halal<span>Travel</span></h1>
            </li>
            <li><button onclick="window.location.href='destination.php'" class="active">Destination</button></li>
            <li><button onclick="window.location.href='../index.php'">Back</button></li>

        </div>
        <div>
            <img src="../assets/icons/test.svg" alt="">
        </div>
    </div>

    <div class="dashboard">
        <div class="dashboard-header">
            <div class="dashboard-account"><?php
                                            session_start();
                                            if (empty($_SESSION['username'])) {
                                                echo "null";
                                            } else {
                                                $_SESSION['username'];
                                            } ?></div>
        </div>
        <h1>EDIT DESTINATION</h1>
        <div class="dashboard-main">
<?php
$sql = "SELECT * from destinasi where id_destinasi= '$id'";
$result=$db->query($sql);
$a=$result->fetch_assoc();
?>
            <form action="destination.php" method="POST" enctype="multipart/form-data">
                <label for="title">Destination id</label>
                <input type="text" placeholder='tittle' name='id' required value='<?php echo $a['id_destinasi'] ?>' >
                <label for="title">Destination Title</label>
                <input type="text" placeholder='tittle' name='tittle' required value='<?php echo $a['tittle'] ?>'>
                <label for="harga">Price</label>
                <input type="text" placeholder='harga' name='harga' required value='<?php echo $a['harga'] ?>'>
                <label for="desc">Description</label>
                <input type="text" placeholder='Desc' name='deskripsi' required value='<?php echo $a['deskripsi'] ?>'>
                <label for="ratings">Ratings</label>
                <input type="number" placeholder='ratings' name='rating' required value='<?php echo $a['rating'] ?>'>
                <div>
                    <label for="Picture">Picture</label>
                    <input type="file" value='gambar' name='gambar' required>
                    <label for="lokasi">Location</label>
                    <input type="text" placeholder='lokasi' name='lokasi' required value='<?php echo $a['lokasi'] ?>'>

                    <button type="submit" value='simpan' name='simpan'>Save</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>