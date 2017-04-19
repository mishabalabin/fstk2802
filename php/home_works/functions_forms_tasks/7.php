<?php
/**
 * 7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
 */


function checkMassge($msg) {
    if(!isset($msg) || !is_string($msg)) {
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
    <form method="post" action="7.php">
        <div>
            <textarea name="text"></textarea>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>
