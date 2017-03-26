<?php
// 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
date_default_timezone_set('Europe/Kiev');

$year = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

foreach ($year as $value) {
    if(date('M') == $value)
        echo "<b>$value </b>";

    else
    echo "$value \n";
}
