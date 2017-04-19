<?php
/**
 * Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.
 */

function uniqueWords($words) {
    if(!empty($words)) {
        $words = explode(' ', $words);
        $countOfUniqueWords = count(array_unique($words));
        echo $countOfUniqueWords;
    }
    else {
        echo 'Error!';
    }
}

uniqueWords($_POST['word']);

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
<form method="post" action="10.php">
    <div>
        <label for="word">Enter a words</label>
        <textarea name="word" id="word"></textarea>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>
