<?php

/**
 * @param int $timeInSec
 * @return array
 */
function returnTime($timeInSec) {
    $returnInWords = [];
    $times = [
        'year' => 31536000,
        'month' => 2592000,
        'day' => 86400,
        'hour' => 3600,
        'minute' => 60
    ];

    foreach ($times as $key => $value) {
        $somePeriod = floor($timeInSec / $value);
        if ($somePeriod > 0) {
            $returnInWords[$key] = $somePeriod;
            $timeInSec -= $somePeriod * $value;
        }
    }
    $returnInWords['second'] = $timeInSec;
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
    if(($dateAsArray >= 2 || $moduleTen == 2) && ($dateAsArray <= 4 || $moduleTen < 5) && !($dateAsArray >= 10 && $dateAsArray <= 14) && $moduleTen != 0) {
        return $fromSecToYears[$flag][1];
    }

    if(($dateAsArray >= 5 && $dateAsArray <= 20) || $moduleHun == 11 || $moduleTen >= 5 || $moduleTen == 0){
        return $fromSecToYears[$flag][2];
    }
}


if($_GET['timeinsec'] && count($_GET) >= 1) {
    foreach (returnTime($_GET['timeinsec']) as $per => $item) {

        if($per == 'year') {
            echo ' '.$item. ' ' .declinationOfWords($item, $per);
        }

        if($per == 'month') {
            echo ' '.$item. ' ' .declinationOfWords($item, $per);
        }

        if($per == 'day') {
            echo ' '.$item. ' ' .declinationOfWords($item, $per);
        }

        if($per == 'hour') {
            echo ' '.$item. ' ' .declinationOfWords($item, $per);
        }

        if($per == 'minute') {
            echo ' '.$item. ' ' .declinationOfWords($item, $per);
        }

        if($per == 'second') {
            echo ' '.$item. ' ' .declinationOfWords($item, $per);
        }
    }
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
<form method="get" action="index2.php">
    <div>
        <input type="number" name="timeinsec">
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>
