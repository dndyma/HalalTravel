<?php
include '../db/koneksi.php';
if (isset($_POST['cari'])) {
    $sql = "SELECT * FROM destinasi";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halal Travel</title>
    <link rel="stylesheet" href="../assets/css/style.css">
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
                    <a href="" class="nav active">Home</a>
                </li>
                <li>
                    <a href="#destination" class="nav">Destinations</a>
                </li>
                <!-- <li>
                    <a href="">Halal</a>
                </li> -->
                <li>
                    <a href="#about" class="nav">About</a>
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
            <div class="btn-login2">
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
                <img src="../assets/img/tajmahal.jpg" alt="" class="img-home">
                <div class="box-search">
                    <div class="search">
                        <form action="index.php">
                            <input type="text" placeholder="Discover your dream destination with a touch of halal elegance.." name='pencarian'>
                        </form>
                        <button type='submit' name='cari'>
                            <img src="../assets/icons/search.svg" alt="search" class="icon-search">
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="destination">
            <div class="container-destination">
                <h1 id="destination"><span>Explore</span> Your Destinations.</h1>
            </div>
            <div class="card-container">
                <?php
                include '../db/koneksi.php';
                $sql = "SELECT * from destinasi";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    while ($a = $result->fetch_assoc()) { ?>
                        <div class="card">
                            <div class="box-card">
                                <img src="../uploads/<?php echo $a['gambar'] ?>" alt="turkey" class="img-card">
                            </div>
                            <div class="card-desc">
                                <h1><?php echo $a['tittle'] ?></h1>
                                <div class="desc">
                                    <div class="star">
                                        <img src="../assets/icons/star.svg" alt="">
                                        <h4><?php echo $a['rating'] ?></h4>
                                    </div>
                                    <div class="location">
                                        <img src="../assets/icons/location.svg" alt="">
                                        <h4><?php echo $a['lokasi'] ?></h4>
                                    </div>
                                </div>
                                <div class="footer-desc">
                                    <div class="price">
                                        <h3>Rp <?php echo number_format($a['harga'], 0, ',', '.'); ?></h3>
                                    </div>
                                    <a href="detail.php?id_destinasi=<?php echo $a['id_destinasi'] ?>"><button>View Detail</button></a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

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
    <script src="../assets/js/index.js">
    </script>

</body>

</html>