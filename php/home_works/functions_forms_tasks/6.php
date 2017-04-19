<?php
/**
 * 6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.
 * Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.
 */

$uploadDir = './gallery';
if(!is_dir($uploadDir)) {
    mkdir('./gallery');
    echo 'Dir created';
}

else {
    if($_FILES) {
        foreach ($_FILES["images"]["error"] as $key => $error) {
            if($error == UPLOAD_ERR_OK) {
                $tmp = $_FILES['images']['tmp_name'][$key];
                $name = $_FILES['images']['name'][$key];
                move_uploaded_file($tmp, "$uploadDir/$name");
                echo 'Файл загружен ';
            }
            else {
                echo 'Error '. $_FILES['images']['error'][$key];
            }
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
    <title>Document</title>
</head>
<body>

<form action="6.php" method="post" enctype="multipart/form-data">
    <div>
        <input name="images[]" type="file" multiple>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>

<?php
if(count(scandir($uploadDir)) > 2) {
    echo "<table border='3px'>";
    echo "<tr>";
    foreach (scandir($uploadDir) as $path) {
        if ($path == '.' || $path == '..') {
            continue;
        }
        else {
            echo "<td><img width='300px' src='$uploadDir/$path'/></td>";
        }
    }
    echo "</tr>";
    echo "</table>";
}
?>

</body>
</html>
