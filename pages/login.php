<?php
include '../db/koneksi.php';
session_start();
$login_in = '';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        $login_in = 'harap data di isi dengan lengkap';
    } else {
        $sql = "SELECT * from user where username_user='$username' and password_user = '$password'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            header('location:index.php');
        } else {
            $login_in = 'akun tidak di temukan';
        }
    }
}
?>
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
        <form action="login.php" class="form-login" method='POST'>
            <p>Login To Continue</p>
            <input type="text" placeholder="Username" name='username'>
            <input type="password" placeholder="Password" name='password'>
            <input type="submit" value="Login" name='login'>
            <p><?php echo $login_in ?></p>
        </form>
    </div>
</body>

</html>

</html>