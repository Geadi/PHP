<?php

    /*
    require - загружает файлы используя указанный путь, если в пути 
    файла будит ошибка, то приостановит работу программы.

    include - делает тоже самое что и require, но если в пути файла 
    будит ошибка, то он не приостановит работу программы.

    include_once - файл подключиться один раз
    require_once - файл подключиться один раз
    */ 


    /*
    include "header.php";
    include "footer.php";

    include_once "header.php";
    include_once "footer.php";

    require_once "header.php";
    require_once "footer.php";
    */

    $title = "Заголовок страницы";
    require "header.php";
    echo "Тело документа";
    require "footer.php";

?>
