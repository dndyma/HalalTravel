<?php
include '../db/koneksi.php';
$destinasi_in = '';
$tittle = $_POST['tittle'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
move_uploaded_file($tmp, '../gambar_input/' . $gambar);
$harga =$_POST['harga'];
$lokasi = $_POST['lokasi'];
$id = uniqid();
if(!is_numeric($harga)){
    $destinasi_in='input harga harus berupa angka';
    header('location: ../pages/admin.php');
}
else{
    $sql = "INSERT into  destinasi values('$id','$tittle','$gambar','$lokasi','$harga')";
    $db->query($sql);
    $sql = "SELECT gambar from destinasi";
    $result = $db->query($sql);
    while($a= $result->fetch_assoc()){
        echo '<img src="../gambar_input/' . $a['gambar'] . '" width="150"><br>';
    }
}
?>