<?php
include '../../db/koneksi.php';
$id= $_GET['id_destinasi'];
$sql="DELETE from destinasi where id_destinasi='$id'";
$db->query($sql);
header('location:../index.php')
?>