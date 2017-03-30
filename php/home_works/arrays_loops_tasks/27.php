<?php
/**
27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
 * Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). чейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.
 *Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все я
 */

$row = 5;
$cols = 5;

$colors = ['red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green'];

echo '<table border="1" cellpadding="5" cellspacing="5">';
for($i = 1; $i <= $row; $i++) {
    echo "<tr>";
    for($j = 1; $j <= $cols; $j++) {
        $colorPicker = rand(0, count($colors));
        echo "<td style='background-color:$colors[$colorPicker]'>". rand(1, 65535)  ."</td>";
    }
    echo "</tr>";
}
echo '</table>';