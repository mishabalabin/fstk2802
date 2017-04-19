<?php
session_start();
$errors = [];

if(in_array(array_keys($_POST), [['email', 'password']])) {
    if($_POST['email'] != 'root@gmail.com') {
        $errors['email'] = 'Пользователь не зарегестрирован!';
    }
    if($_POST['password'] != 'Qq123321') {
        $errors['password'] = 'Неверный пароль!';
    }

    if(!$errors) {
        $_SESSION['isAuth'] = true;
    }
    else {
        $_SESSION['isAuth'] = false;
    }

    if(isset($_SESSION['isAuth']) && $_SESSION['isAuth']) {
        header('HTTP/1.2 301 Redirect');
        header('Location: http://fstk2802/php/myself/authentication/cabinet.php');
    }
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication Form</title>
</head>
<body>
    <form method="post" action="authform.php" style="text-align: center">
        <div>
            <input name="email" type="email" placeholder="Email" required>
        </div>
        <?php if(array_key_exists('email', $errors)) { ?>
            <span style="color: red"><?= $errors['email'] ?></span>
        <?php } ?>
        <div>
            <input name="password" type="password" placeholder="Password" required>
        </div>
        <?php if(array_key_exists('password', $errors)) { ?>
            <span style="color: red"><?= $errors['password'] ?></span>
        <?php } ?>
        <div>
            <input type="submit" value="LogIn">
        </div>
    </form>
</body>
</html>
