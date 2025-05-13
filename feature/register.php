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
        $sql = "SELECT email_user FROM user where email_user='$email'";
        $result = $db->query($sql);
        if($result->num_rows>0){
            $register_in='email telah digunakan';
            header('location:../pages/register.php');
        }
        else{
            $sql = "INSERT into user values('$id_user','$username','$password','$email','$role')";
            $result = $db->query($sql);
            $_SESSION['username'] = $username;
            header('location:../pages/index.php');
        }
    }
}
?>