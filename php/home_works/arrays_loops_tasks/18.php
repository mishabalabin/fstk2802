<?php
// 18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.

$arr = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

foreach ($arr as $value) {
    if($value == 'Sat' || $value =='Sun')
        echo "<b> $value </b>";
    else
        echo "$value ";
}


