<?php
session_start();

if (!isset($_SESSION['isAuth']) || !$_SESSION['isAuth']) {
    header('HTTP/1.2 301 Redirect');
    header('Location: http://fstk2802/php/myself/authentication/authform.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Вы успешно зашли в ЛК!</h1>
<a href="authform.php">Backk</a>
</body>
</html>

