<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập</title>
</head>

<body>
    <style type="text/css">
        .login {
            height: 210px;
            width: 230px;
            margin: 10px;
            padding: 10px;
            border: 5px #CCC solid;
        }

        .login input {
            padding: 5px;
            margin: 5px
        }
    </style>
    <form method="post">
        <div class="login">
            <h1>Login</h1>
            <input type="text" name="username" size="20" placeholder="username"><br>
            <input type="password" name="password" size="20" placeholder="password"><br>
            <input type="submit" name="submit" value="submit">
        </div>
    </form>
    <?php
   
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username === 'admin' && $password === 'admin') {
            echo 'đăng nhập thành công';
        } else {
            echo 'đăng nhập thất bại';
        }

    ?>
</body>

</html>