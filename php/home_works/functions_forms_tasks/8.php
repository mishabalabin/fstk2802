<?php
/**
 * 8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
 * Реализовать проверку на наличие в тексте запрещенных слов, матов.
 * При наличии таких слов - выводить сообщение "c". Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.
 */


function checkMassge($msg) {
    if(!isset($msg) || !is_string($msg) || empty($msg)) {
        echo 'Incorrect Input';
        return false;
    }

    $checkArray = preg_split("/[\s,\.]+/", $msg);
    $restrictedWords = ['Слово1', 'Слово4', 'Слово2', 'Слово7', 'Слово6', 'Слово5', 'Слово3', 'xyz'];
    if(count(array_intersect($checkArray, $restrictedWords)) > 0) {
        echo "IncorrectInput";
        return false;
    }
    return true;
}

function addComment($comment) {

    if(!is_file('comments.txt')) {
        $handle = fopen('comments.txt', 'w');
        fclose($handle);
    }

    if(is_file('comments.txt')) {
        $handle = fopen('comments.txt', 'a+');
        $comment = preg_replace("/[\s,\.]+/", ' ', $comment);
        $comment = htmlspecialchars($comment, ENT_QUOTES);
        fwrite($handle, $comment . PHP_EOL);
        fclose($handle);
    }
}

function showComments() {
    $commentsArray = file('comments.txt');
    echo "<ul>";
    foreach ($commentsArray as $item) {
        echo "<li>" . $item . "</li>";
    }
    echo "</ul>";
}

if(checkMassge($_POST['text'])) {
    addComment($_POST['text']);
}

if(is_file('comments.txt'))
showComments();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            width: 1024px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<form method="post" action="8.php">
    <div>
        <textarea name="text"></textarea>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>

