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