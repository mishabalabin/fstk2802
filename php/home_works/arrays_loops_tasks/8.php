<?php
//8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'. Циклы while и for

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $value) {
    $toStr = "$value";
    if(is_string($toStr))
    echo $toStr;
}
?>