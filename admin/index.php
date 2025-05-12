<?php
include '../db/koneksi.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/root.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>
    <div class="sidebar">
        <div>
            <li>
                <h1>Halal<span>Travel</span></h1>
            </li>
            <li><button onclick="window.location.href='index.php'" class="active">Dashboard</button></li>
            <li><button onclick="window.location.href='user.php'">User</button></li>
            <li><button onclick="window.location.href='destination.php';">Destination</button></li>
        </div>
        <div>
            <img src="../assets/icons/test.svg" alt="">
        </div>
    </div>

    <div class="dashboard">
        <div class="dashboard-header">
            <a href="user.php">
                <button>
                    Add User
                </button>
            </a>
            <a href="destination.php"><button>
                    Add destination
                </button>
            </a>
            <div class="dashboard-account"><?php echo $_SESSION['username']?></div>

        </div>
        <div class="dashboard-main">
            <h1>DESTINATION LIST</h1>
            <table border="0" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Ratings</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    $sql = "SELECT * FROM destinasi";
                    $result=$db->query($sql);
                    if($result->num_rows>0){
                        while($a=$result->fetch_assoc()){
                            $no+=1;
                    ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $a['tittle'] ?></td>
                            <td><?php echo $a['lokasi'] ?> </td>
                            <td><?php echo $a['harga'] ?></td>
                            <td><?php echo $a['rating'] ?></td>
                            <td>
                                <a href="detail_destinasi.php?id_destanasi=<?php echo $a['id_destinasi'] ?>">
                                    <button>Detail</button>
                                </a>
                                <a href="edit_destinasi.php?id_destinasi=<?php echo $a['id_destinasi'] ?>">
                                    <button>Edit</button>
                                </a>
                                <a href="hapus_detinasi.php?id_destinasi=<?php echo $a['id_destinasi'] ?>">
                                    <button class="btn2" >Delete</button>
                                </a>
                            </td>
                        </tr>
                    <?php      
                        }
                    }
                    ?>
                </tbody>
            </table>
            <h1>USER LIST</h1>
            <table border="0" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>action</th>
                </thead>
                <?php
                $no = 0;
                $sql = "SELECT * from user";
                $result=$db->query($sql);
                if($result->num_rows>0){
                    while($a=$result->fetch_assoc()){
                        $no+=1
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no  ?></td>
                                <td><?php echo $a['username_user']  ?></td>
                                <td><?php echo sha1($a['password_user'])  ?></td>
                                <td><?php echo $a['email_user']  ?></td>
                                <td><?php echo $a['role']  ?></td>
                                <td>
                                    <a href="edit_user.php?id_user='<?php echo $a['id_user'] ?>'">
                                        <button>Edit</button>
                                    </a>
                                    <a href="hapus_user.php?id_user='<?php echo $a['id_user'] ?>">
                                        <button class="btn2">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php    
                    }
                }
                ?>
            </table>
            <h1>ADMIN LIST</h1>
            <table border="0" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </thead>
                <?php
                $no = 0;
                $sql = "SELECT * from admin";
                $result=$db->query($sql);
                if($result->num_rows>0){
                    while($a=$result->fetch_assoc()){
                        $no+=1
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no  ?></td>
                                <td><?php echo $a['username_admin']  ?></td>
                                <td><?php echo sha1($a['password_admin'])  ?></td>
                                <td><?php echo $a['email_admin']  ?></td>
                                <td><?php echo $a['role']  ?></td>
                                <td>
                                    <a href="edit_admin.php?id_user='<?php echo $a['id_admin'] ?>'">
                                        <button>Edit</button>
                                    </a>
                                    <a href="hapus_admin.php?id_user='<?php echo $a['id_admin'] ?>">
                                        <button class="btn2">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php    
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>