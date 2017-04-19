<?php
/**
 * 3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
 */

if($_GET['lenght'] && count($_GET) == 1) {
    if(!is_file('textfile.txt')) {
        $handle = fopen('textfile.txt', 'a+');
        fwrite($handle, 'Привет мир' . PHP_EOL . 'Это новая строка');
        fclose($handle);
    }

    else {
        $handle = fopen('textfile.txt', 'r');
        $arrayContent = preg_split("/[\s,]+/", file_get_contents('textfile.txt'));
        file_put_contents('textfile.txt', '');
        fclose($handle);
        foreach ($arrayContent as $value) {
            // В кипиллице 1 символ = 2 байта.
            if((iconv_strlen($value) / 2) <= $_GET['lenght'] ) {
                $handle = fopen('textfile.txt', "a");
                $value .= ' ';
                fwrite($handle, $value);
                fclose($handle);
            }
        }
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
    <title>Document</title>
</head>
<body>
<form method="get" action="3.php">
    <div>
        <input type="number" name="lenght" placeholder="lenght">
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>
