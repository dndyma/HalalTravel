<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/root.css">
    <link rel="stylesheet" href="../../assets/css/destination.css">
</head>

<body>
    <div class="sidebar">
        <div>
            <li>
                <h1>Halal<span>Travel</span></h1>
            </li>
            <li><button onclick="window.location.href='admin.php'" class="active">Admin</button></li>
            <li><button onclick="window.location.href='../index.php'">Back</button></li>
        </div>
        <div>
            <img src="../assets/icons/test.svg" alt="">
        </div>
    </div>

    <div class="dashboard">
        <div class="dashboard-header">
            <div class="dashboard-account"><?php
                                            session_start();
                                            if (empty($_SESSION['username'])) {
                                                echo "null";
                                            } else {
                                                $_SESSION['username'];
                                            } ?></div>
        </div>
        <h1>EDIT ADMIN</h1>
        <div class="dashboard-main">

            <form action="../feature/admin_admin.php" method="POST" enctype="multipart/form-data">

                <label for="Username">Username</label>
                <input type="text" placeholder='Username' name='username' required>
                <label for="email">Email</label>
                <input type="email" placeholder='email' name='email' required>
                <label for="password">Password</label>
                <input type="password" placeholder='password' name='password' required>
                <label for="role">Role</label>
                <input type="text" placeholder='' name='role' value="admin" disabled style="font-size: medium;color:black;">
                <div>
                    <div></div>

                    <button type="submit" value='simpan' name='simpan'>Save</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>