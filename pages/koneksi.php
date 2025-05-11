<?php
$username = 'root';
$password = '';
$hostname = 'localhost';
$database_name = 'db_halal';
$db = mysqli_connect($hostname,$username,$password,$database_name);
if($db->connect_error){
    echo 'koneksi gagal';
};
?>