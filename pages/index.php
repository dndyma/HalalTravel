<?php
session_start();
if(isset($_POST['logout'])){
    $_SESSION['username'] = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halal Travel</title>
    <link rel="stylesheet" href="../assets/css/style.css">
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
                    <a href="" id="active">Home</a>
                </li>
                <li>
                    <a href="">Destinations</a>
                </li>
                <li>
                    <a href="">Halal</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
            </ul>
        </nav>
        <?php
        if(empty($_SESSION['username'])){
        ?>
        <div class="btn-login">
            <a href="login.php">
                <button class="login">
                    Login
                </button>
            </a>
            <a href="">
                <button>
                    Create Account
                </button>
            </a>
        </div>
        <?php
        }else{
        ?>
        <div class="btn-login">
            <form action="index.php" method='POST'>
                <input type="submit" value="logout" name='logout'>
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
                        <form action="">
                            <input type="text" placeholder="Discover your dream destination with a touch of halal elegance..">
                        </form>
                        <button>
                            <img src="../assets/icons/search.svg" alt="search" class="icon-search">
                        </button>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <script src="../assets/js/index.js"></script>
</body>

</html>