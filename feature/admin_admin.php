<?php
include '../db/koneksi.php';
$user_in = '';
$id = uniqid();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = 'admin';
if(empty($username) || empty($email) || empty($password) || empty($role)){
    $user_in='input harga harus benar';
    header('location: ../admin/user.php');
} else {
    $sql = "INSERT into  admin values('$id','$username','$password','$email','$role')";
    $db->query($sql);
    header('location:../admin/user.php');
}