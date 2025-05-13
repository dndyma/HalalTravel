<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <div class="container">
        <form action="../feature/login.php" class="form-login" method='POST'>
            <div class="img-icons">
                <img src="../assets/img/muslim.png" alt="" class="mesjid">
            </div>
            <div class="inputnya">
                <label for="username">Username</label>
                <input type="text" placeholder="Username" name='username' maxlength="30">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name='password' minlength="5" maxlength="15">
                <div>
                    <label for="role">Role</label>
                    <input type="radio" value="user" name="role">
                    <label for="user">User</label><br>
                    <input type="radio" value="admin" name="role">
                    <label for="admin">Admin</label><br>
                </div>
            </div>
            <div class="btn">
                <button type="submit" value="Login" name='login'>Login</button>
                <div>
                    <p>Don't have an account? <a href="register.php">Sign Up</a></p>
                    <p>Forgot password</p>
                </div>
                <p><?php include '../feature/login.php';
                    echo $login_in ?></p>
            </div>
        </form>
    </div>
</body>

</html>

</html>