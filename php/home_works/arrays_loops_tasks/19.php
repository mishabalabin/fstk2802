<?php
// 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
date_default_timezone_set('Europe/Kiev');
$arr = range(1,31,1);

foreach ($arr as $value) {
    if(date('j') == $value){
        $day = $value;
        echo "<i>$day </i>";
    }
    else
    echo "$value ";
}

?>