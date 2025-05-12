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
                <img src="../assets/img/tajmahal.jpg" alt="" class="img-home">
            </div>
            </div>
        </section>

        <section class="destination">
            <div class="container-destination">
                <div class="detail-destination">
                    <h1 id="destination">Turkey National Park.</h1>
                    <div class="">
                        <img src="../assets/icons/location2.svg" alt="">
                        <p>Turkey , Istanbull</p>
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
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima fugit ex tempora, impedit ut ducimus, eius, cumque ea sed quisquam iusto! Explicabo dolorum quaerat libero aliquid inventore corporis at deleniti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam beatae distinctio blanditiis. Quae suscipit ex voluptatem doloremque? Consequatur deleniti facere, reiciendis a fugit placeat dignissimos eaque labore doloribus illum amet.
                        Possimus aliquid sequi quos odit magnam velit. Accusantium eum quas incidunt. Cupiditate neque, nobis exercitationem quo, cum voluptates, eligendi commodi perspiciatis quaerat aliquid rem iusto quis numquam. Voluptas, tempore ipsum!
                        Mollitia eum cumque commodi consequuntur eveniet voluptatem, necessitatibus natus quibusdam obcaecati aliquam quaerat quos quod error repellat voluptatibus dolores praesentium! In magnam et molestiae, voluptatem quae reprehenderit aliquam aliquid vero?
                        Impedit quae aspernatur ratione ut cum, beatae fugit, cupiditate accusantium perferendis voluptate eveniet dolorum dolores voluptas molestiae unde vitae in, adipisci eius est quidem non. Recusandae at assumenda odit repellendus?
                        Iste tenetur architecto et qui veritatis, placeat illum excepturi commodi, ducimus officiis enim doloremque officia. Commodi fuga enim magnam autem cupiditate velit reprehenderit a temporibus, rerum iusto, earum accusamus laudantium!
                        Aperiam explicabo, nisi vel debitis maxime eveniet earum fugit accusantium eius nihil molestias enim ea dolorum accusamus saepe facilis libero numquam voluptatibus, quibusdam, quisquam ut porro eligendi. Non, praesentium eum.
                        Accusamus et vero id consequatur inventore voluptates dicta, mollitia, deleniti eligendi doloremque beatae non dolores dignissimos reiciendis ea voluptate at nisi optio sequi neque ab perferendis, quo repellat nemo! Fugiat.
                        Nisi, ipsam voluptas veritatis dignissimos distinctio doloremque corporis quod suscipit excepturi fuga laboriosam quaerat alias repellat tempora amet deserunt eum ullam quas vitae optio sapiente odit. Voluptatibus dolor omnis dignissimos?
                        Quo ipsa veniam, consequatur quas cupiditate provident enim dolor odio, maxime cum, ipsam minima soluta optio asperiores ducimus voluptatibus voluptate! Inventore eligendi voluptas nostrum modi dicta velit voluptatibus voluptates qui.
                        Quis tempore in, error aperiam, quod qui voluptatem vero nesciunt expedita nemo illum quae voluptates consequatur, labore placeat. Nihil, dolor? Adipisci aliquam molestiae deserunt dolorem exercitationem reprehenderit eius commodi iusto?</p>
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