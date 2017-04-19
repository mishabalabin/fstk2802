<?php
/**
 *  Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  Директория и искомое слово задаются как параметры функции.
 */


function searchDirWord($path, $word) {
    $arrayFiles = [];

    foreach (glob("*.*") as $filename) {
        if(strstr(file_get_contents($filename), $word) != false) {
            $arrayFiles[] = $filename;
        }
    }
    return $arrayFiles;
}

print_r(searchDirWord('.', ' '));