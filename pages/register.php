<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <title>Register</title>
</head>

<body>

    <body>
        <div class="container">
            <form action="../feature/register.php" class="form-register" method='POST'>
                <div class="img-icons">
                    <img src="../assets/img/muslim.png" alt="" class="mesjid">
                </div>
                <div class="inputnya">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Username" name='username' maxlength="30">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" name='email' minlength="8" maxlength="15">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" name='password' minlength="8" maxlength="15">
                </div>
                <div class="btn">
                    <button type="submit" value="Login" name='login'>Register</button>
                    <div>
                        <p>Do you already have an account?<a href=""> Sign In</a></p>
                    </div>
                </div>
                <p><?php echo $login_in ?></p>
            </form>
        </div>
        </form>
    </body>
</body>

</html>