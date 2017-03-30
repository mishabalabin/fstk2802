<?php
//13. Вывести таблицу умножения
echo '<table border="1" cellpadding="5" cellspacing="5">';
    for($i = 0; $i < 10; $i++){
        echo "<tr>";
            for($j = 0; $j < 10; $j++) {
                if($i == 0 && $j == 0) {
                    echo "<td></td>";
                }

                elseif ($j == 0) {
                    echo "<td>$i</td>";
                }

                elseif ($i == 0) {
                    echo "<td>$j</td>";
                }

                else
                echo "<td>". $i * $j ."</td>";
            }
        echo "</tr>";
    }

echo '</table>';
?>