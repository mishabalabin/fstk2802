<?php
/**
25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.
 */

for ($i = 0; $i <= 5; $i++) {
    $arr[] = rand(1, 100000);
}

$max = max($arr);
$min = min($arr);

foreach ($arr as $key => $value) {
    if($value == $min) {
        $key_min = $key;
    }

    elseif ($value == $max) {
        $key_max = $key;
    }
}
list($arr[$key_max], $arr[$key_min]) = [$arr[$key_min], $arr[$key_max]];

