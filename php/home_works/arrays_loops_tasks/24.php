<?php
/**
24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе.
 * Например: цифра 5 в числе 442158755745 встречается 4 раза.
 */

$input = (string)'12312312312312312355123';
$result = substr_count($input, 5);
echo $result;

