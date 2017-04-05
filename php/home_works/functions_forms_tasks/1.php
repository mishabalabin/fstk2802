<?php
/**
1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
 */

function getCommonWords ($a, $b) {
    $firstForm = explode(" ", str_replace([',', '.'], null, $a));
    $secondForm = explode(" ", str_replace([',', '.'], null, $b));
    $returnArray = [];

    foreach ($firstForm as $firstValue) {
        if(in_array($firstValue, $secondForm) && !in_array($firstValue, $returnArray)) {
            $returnArray[] = $firstValue;
        }
    }

    return $returnArray;
}

if($_POST && count($_POST) > 0) {
    $arr = getCommonWords($_POST['areaOne'], $_POST['areaTwo']);
    echo "<pre>". print_r($arr, true) ."</pre>";
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
    <form method="post" action="1.php">
        <div>
            <textarea name="areaOne"></textarea>
        </div>
        <div>
            <textarea name="areaTwo"></textarea>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>
