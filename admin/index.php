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
        <li>
            <h1>Halal<span>Travel</span></h1>
        </li>
        <li><button onclick="window.location.href='index.php'" class="active">Dashboard</button></li>
        <li><button onclick="window.location.href='user.php'">User</button></li>
        <li><button onclick="window.location.href='destination.php';">Destination</button></li>
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
            <div class="dashboard-account">Dandy M</div>

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
                    <tr>
                        <td>1</td>
                        <td>Turkey National Park</td>
                        <td>Turkey,Istanbull</td>
                        <td>$23.59</td>
                        <td>5</td>
                        <td>
                            <button>Detail</button>
                            <button>Edit</button>
                            <button class="btn2">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Turkey National Park</td>
                        <td>Turkey,Istanbull</td>
                        <td>$23.59</td>
                        <td>5</td>
                        <td>
                            <button>Detail</button>
                            <button>Edit</button>
                            <button class="btn2">Delete</button>
                        </td>
                    </tr>
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
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Agung</td>
                        <td>hashing password</td>
                        <td>agung@co.id</td>
                        <td>user</td>
                        <td>
                            <button>Edit</button>
                            <button class="btn2">Delete</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>