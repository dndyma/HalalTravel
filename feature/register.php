<?php
include '../db/koneksi.php';
session_start();
$id=0;
$register_in='';
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username) || empty($password)){
        $register_in = 'form tidak boleh kosong';
    }
    else{
        $sql = "SELECT id_user FROM user";
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $id+=1;
        }
        $id+=1;
        $id_user = 'user_'.$id;
        $sql = "INSERT into user value('$id_user','$username','$password')";
        $result = $db->query($sql);
        header('location:index.php');
    }
}
?>