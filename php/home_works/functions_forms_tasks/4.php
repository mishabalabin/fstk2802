<?php
/**
 * Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
 */

function dirFiles($path) {
    print_r(scandir($path));
}

dirFiles('.');
