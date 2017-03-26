<?php
/**
<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>
 */

for($i = 0; $i <= 12; $i++) {
    if($i % 2) {
        for($j = 0; $j <= $i; $j++) {
            echo "x";
        }
    }
    else
    echo "\n";
}