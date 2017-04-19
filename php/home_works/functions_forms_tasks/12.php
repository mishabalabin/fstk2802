<?php
/**
 * 12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.
 * Пример:
 * Входная строка:  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.'
 * Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'
 */


function upperFirstLetter($someString) {
    $sentencesArray = explode('. ', $someString);
    for($i = 0; $i < count($sentencesArray); $i++) {
        $chars = mb_convert_case(substr($sentencesArray[$i], 0, 2), MB_CASE_UPPER, 'UTF-8');
        $sentencesArray[$i] = substr_replace($sentencesArray[$i], $chars, 0, 2);
    }
    $returnReverse = array_reverse($sentencesArray);
    return print_r(implode('. ', $returnReverse));
}

upperFirstLetter('а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.');

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
