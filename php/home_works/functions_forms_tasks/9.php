<?php
/**
 * 9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
 */

function reverseWord($word) {
    $newWord = array_reverse(str_split($word));
    $newWord = implode('', $newWord);
    echo $newWord;
}
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
<form method="post" action="9.php">
    <div>
        <label for="word">Enter a word</label>
        <input type="text" name="word" id="word">
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
    <div>
        <?= reverseWord($_POST['word']); ?>
    </div>
</form>
</body>
</html>
