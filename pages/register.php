<?php
include '../db/koneksi.php';
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="register" value="Register">
        <p><?php echo $register_in ?></p>
    </form>
</body>
</html>
