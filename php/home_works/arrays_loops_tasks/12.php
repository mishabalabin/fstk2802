<?php
//12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится?
//Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную $num.


for($num = 0, $n = 1000; $n > 50; $num++) {
    $n = $n / 2;
}

echo "Number: $n \n";
echo "Iterations: $num \n";

?>