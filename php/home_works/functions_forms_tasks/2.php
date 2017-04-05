<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.04.2017
 * Time: 20:44
 * 2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
 */

function topLenghtWords ($word) {
    $toArray = explode(" ", str_replace([',', '.'], null, $word));
    $returnArray = [];

    foreach ($toArray as $value) {
        $returnArray[iconv_strlen($value)] = [
            'word' => $value,
            'chars' => iconv_strlen($value)
        ];
    }
    krsort($returnArray);
    return array_slice($returnArray, 0, 3);
}

if($_POST && count($_POST) >= 1) {
    $arr = topLenghtWords($_POST['textArea']);
    echo '<pre>'. print_r($arr, true) .'</pre>';
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
<form method="post" action="2.php">
    <div>
        <textarea name="textArea"></textarea>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>
