<?php
/**
23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
По желанию можете сделать проверку на корректность введения данных пользователем.
 */
if(isset($_POST['numbers']) && is_numeric($_POST['numbers'])){
    if ($_POST['numbers'] < 0) {
    echo 'Отрицательное число';
    exit();
    }
    $number = $_POST['numbers'];
    for($i = 0; $i < strlen($_POST['numbers']); $i++) {
        $nums[] = $number{$i};
    }
    foreach ($nums as $value) {
        $result = $result + $value;
    }
    echo "Сумма всех цифр числа = $result";
}

else {
    echo "Unknown input";
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
    <form action='<?= $_SERVER['REQUEST_URI']?>' method="post">
        <div><input type="number" name="numbers" placeholder="Enter your number" required></div>
        <div><input type="submit" value="Calculate"></div>
    </form>
</body>
</html>
