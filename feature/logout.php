<?php
session_start();
if (isset($_POST['logout'])) {
    $_SESSION['username'] = '';
    header('location:login.php');
}
?>