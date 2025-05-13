<?php
include '../db/koneksi.php';
$admin_in = '';
$id = uniqid();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = 'admin';
if(empty($username) || empty($email) || empty($password) || empty($role)){
    $user_in='input harga harus benar';
    header('location: ../admin/user.php');
} else {
    $sql = "SELECT email_admin FROM admin where email_admin='$email'";
        $result = $db->query($sql);
        if($result->num_rows>0){
            $admin_in='email telah digunakan';
            header('location:../admin/admin.php');
        }
        else{
            $sql = "INSERT into  admin values('$id','$username','$password','$email','$role')";
            $db->query($sql);
            header('location:../admin/user.php');
        }
}
