<?php
session_start();
if (isset($_POST['logout'])) {
    $_SESSION['username'] = '';
    header('location:../pages/login.php');
}
?>