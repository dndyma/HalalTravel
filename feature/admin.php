<?php
include '../db/koneksi.php';
$destinasi_in = '';
$tittle = $_POST['tittle'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
move_uploaded_file($tmp, '../uploads/' . $gambar);
$harga = $_POST['harga'];
$lokasi = $_POST['lokasi'];
$id = uniqid();
$rating = $_POST['rating'];
if(!is_numeric($harga) || empty($tittle) || empty($gambar) || empty($harga) || empty($lokasi)){
    $destinasi_in='input harga harus berupa angka';
    header('location: ../pages/admin.php');
} else {
    $sql = "INSERT into  destinasi values('$id','$tittle','$gambar','$lokasi','$harga','$rating')";
    $db->query($sql);
    header('location:../admin/destination.php');
}
