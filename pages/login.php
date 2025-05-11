<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body, html {
            height: 100%;
            width: 100%;
        }

        .container {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: flex-end; 
            align-items: center;
        }

        .img-login {
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .form-login {
            background-color: rgba(255, 255, 255, 0.5); /* semi transparan */
            padding: 30px;
            border-radius: 10px;
            margin-right: 80px;
            width: 500px;
        }

        .form-login input[type="text"],
        .form-login input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-login input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: navy;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="../assets/img/masjid.jpeg" class="img-login" alt="Background">
        <form action="" class="form-login">
            <p>login</p>
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
</html>