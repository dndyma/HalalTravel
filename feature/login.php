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
        $sql = "SELECT * from user where username_user='$username' and password_user = '$password' ";
        $result = $db->query($sql);
        $a =$result->fetch_assoc();
        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            if($a['role']=='admin'){
                header('location');
            }
            else{
                header('location:../pages/index.php');
            }
        } else {
            $login_in = 'akun tidak di temukan';
        }
    }
}
?>