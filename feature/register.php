<?php
include '../db/koneksi.php';
session_start();
$id_user =  uniqid();
$register_in='';
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = 'user';
    if(empty($username) || empty($password)){
        $register_in = 'form tidak boleh kosong';
    }
    else{
        $sql = "SELECT id_user FROM user";
        $result = $db->query($sql);
        $sql = "INSERT into user value('$id_user','$username','$password','$role')";
        $result = $db->query($sql);
        header('location:../pages/index.php');
    }
}
?>