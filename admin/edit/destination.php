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
            <li><button onclick="window.location.href='user.php'">User</button></li>
            <li><button onclick="window.location.href='admin.php'">Admin</button></li>
            <li><button onclick="window.location.href='destination.php'" class="active">Destination</button></li>
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

            <form action="../feature/admin_destinasi.php" method="POST" enctype="multipart/form-data">
                <label for="title">Destination Title</label>
                <input type="text" placeholder='tittle' name='tittle' required>
                <label for="harga">Price</label>
                <input type="text" placeholder='harga' name='harga' required>
                <label for="desc">Description</label>
                <input type="text" placeholder='Desc' name='deskripsi' required>
                <label for="ratings">Ratings</label>
                <input type="number" placeholder='ratings' name='rating' required>
                <div>
                    <label for="Picture">Picture</label>
                    <input type="file" value='gambar' name='gambar' required>
                    <label for="lokasi">Location</label>
                    <input type="text" placeholder='lokasi' name='lokasi' required>

                    <button type="submit" value='simpan' name='simpan'>Save</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>