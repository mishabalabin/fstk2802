<?php

/**
 * @param int $timeInSec
 * @return array
 */
function returnTime($timeInSec) {
    $returnInWords = [];
    $times = [31536000, 2592000, 86400, 3600, 60];
    for($i = 0; $i <= 4; $i++) {
        $somePeriod = floor($timeInSec/$times[$i]);
        if($somePeriod > 0) {
            $returnInWords[] = $somePeriod;
            $timeInSec -= $somePeriod * $times[$i];
        }
    }
    $returnInWords[] = $timeInSec;
    var_dump($returnInWords);
    return  $returnInWords;
}


/**
 * @param int $dateAsArray
 * @param string $flag
 * @return string
 */

function declinationOfWords($dateAsArray, $flag) {

    $fromSecToYears = [
        'second' => ['секунда', 'секунды', 'секунд'],
        'minute' => ['минута', 'минуты', 'минут'],
        'hour' => ['час', 'часа', 'часов'],
        'day' => ['день', 'дня', 'дней'],
        'month' => ['месяц', 'месяца', 'месяцев'],
        'year' => ['год', 'года', 'лет']
    ];


    $moduleTen = $dateAsArray % 10;
    $moduleHun = $dateAsArray % 100;

    if(($dateAsArray == 1 || $moduleTen == 1) && $moduleHun != 11) {
        return $fromSecToYears[$flag][0];
    }

    if(($dateAsArray >= 2 || $moduleTen == 2) && ($dateAsArray <= 4 || $moduleTen < 5)) {
        return $fromSecToYears[$flag][1];
    }

    if(($dateAsArray >= 5 && $dateAsArray <= 20) || $moduleHun == 11 || $moduleTen >= 5){
        return $fromSecToYears[$flag][2];
    }
}
//echo declinationOfWords(235, 'second');

/*
$seconds = ['секунда', 'секунды', 'секунд'];
$minutes = ['минута', 'минуты', 'минут'];
$hours = ['час', 'часа', 'часов'];
$days = ['день', 'дня', 'дней'];
$moths = ['месяц', 'месяца', 'месяцев'];
$years = ['год', 'года', 'лет'];
$second = 1;
*/



if($_GET['timeinsec'] && count($_GET) >= 1) {
    returnTime($_GET['timeinsec']);
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date and time</title>
</head>
<body>
    <form method="get" action="index.php">
        <div>
            <input type="number" name="timeinsec">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>
