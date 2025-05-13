<?php
include '../db/koneksi.php';
session_start();
$login_in = '';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    if (empty($username) || empty($password)) {
        $login_in = 'harap data di isi dengan lengkap';
    } else {
        if($role=='admin'){
            $sql1 = "SELECT * from user where username_user='$username' and password_user = '$password' ";
            $result1 = $db->query($sql1);
            if ($result1->num_rows > 0) {
                $_SESSION['username'] = $username;
                header('location:../pages/index.php');
            }else{
                $login_in = 'akuntidak ditemukan';
                header('location:../pages/login.php'); 
            }
        }
        elseif($role=='user'){
            $sql2 = "SELECT * from admin where username_admin='$username' and password_admin = '$password' ";
            $result2 = $db->query($sql2);
            if($result2->num_rows>0){
                $_SESSION['username'] = $username;
                header('location:../admin/index.php');
            }else {
                $login_in = 'akuntidak ditemukan';
                header('location:../pages/login.php');    
            }
        }
    }
}
?>