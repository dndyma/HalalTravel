<?php
include '../db/koneksi.php';
session_start();
$register_in='';
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = 'user';
    $id_user =  uniqid();
    if(empty($username) || empty($password) || empty($email)){
        $register_in = 'form tidak boleh kosong';
        header('location:../pages/register.php');
    }
    else{
        $sql = "SELECT id_user FROM user";
        $result = $db->query($sql);
        $sql = "INSERT into user values('$id_user','$username','$password','$email','$role')";
        $result = $db->query($sql);
        $_SESSION['username'] = $username;
        header('location:../pages/index.php');
    }
}
?>