<?php
include '../db/koneksi.php';
$id = $_GET['id_destinasi'];
$sql = "SELECT * from destinasi where id_destinasi='$id'";
$result = $db->query($sql);
$a = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halal Travel</title>
    <link rel="stylesheet" href="../assets/css/detail.css">
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <header>
        <h1>Halal<span>Travel</span></h1>
        <nav>
            <ul>
                <li>
                    <a href="index.php" id="active">Back</a>
                </li>
                <li>
                    <a href="#destination">Detail</a>
                </li>
                <!-- <li>
                    <a href="">Halal</a>
                </li> -->
                <li>
                    <a href="#about">About</a>
                </li>
            </ul>
        </nav>
        <?php
        session_start();
        if (empty($_SESSION['username'])) {
        ?>
            <div class="btn-login">
                <a href="./login.php">
                    <button class="login">
                        Login
                    </button>
                </a>
                <a href="register.php">
                    <button>
                        Create Account
                    </button>
                </a>
            </div>
        <?php
        } else {
        ?>
            <div class="btn-login">
                <form action="../feature/logout.php" method='POST'>
                    <input type="submit" value="Logout" name='logout' class="logout">
                </form>
            </div>
        <?php
        }
        ?>
    </header>
    <!-- HomePage -->
    <main>
        <section class="home">
            <div class="container-img">
                <img src="../uploads/<?php echo $a['gambar'] ?>" alt="" class="img-home">
            </div>
            </div>
        </section>

        <section class="destination">
            <div class="container-destination">
                <div class="detail-destination">
                    <h1 id="destination"><?php echo $a['tittle'] ?></h1>
                    <div class="">
                        <img src="../assets/icons/location2.svg" alt="">
                        <p><?php echo $a['lokasi'] ?></p>
                    </div>
                </div>
                <div class="blob-destination">
                    <div>
                        Description
                    </div>
                    <div>
                        FAQ
                    </div>
                </div>
                <div class="desc-destination">
                    <p><?php echo $a['deskripsi'] ?></p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div id="about">
            <div class="f1">
                <h1><span>Halal</span>Travel</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, quas!</p>
            </div>
            <div class="f1">
                <h3>About</h3>
                <li><a href="">How to Travel</a></li>
                <li><a href="">We price match</a></li>
                <li><a href="">refer a friend</a></li>
            </div>
            <div class="f1">
                <h3>Info</h3>
                <li><a href="">Privacy & Condition Polities</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">Contact Us</a></li>
            </div>
        </div>
    </footer>

    <script src="../assets/js/index.js"></script>
</body>

</html>