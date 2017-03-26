<?php
//13. Вывести таблицу умножения
echo '<table border="1" cellpadding="5" cellspacing="5">';
for($i = 1; $i <= 10; $i++){
    echo '<tr>';
    for($j= 1; $j <= 10; $j++){
        $res = $i * $j;
        echo "<td>$res</td>";
    }
    echo '</tr>';
}
echo '</table>';
?>