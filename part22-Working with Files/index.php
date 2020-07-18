<?php

    /*
    многие веши лучше хранить не в базе данных а в файлах
    fopen() - открывает файл и проводит над ним различные манипуляции
    r - открывает файл только для чтения
    r+ - открывает файл для чтения и записи
    w - открывает файл только для записи помешяет указатель в конец файла
    если файл не сушиствует то он пробует его создать
    w+ - открывает файл для записи и чтения помешяет указатель в конец файла
    если файл не сушиствует то он пробует его создать
    a - открывает файл только для записи помешяет указатель в конец файла
    a+ - открывает файл для чтения записи помешяет указатель в конец файла
    если файл не сушиствует то он пробует его создать
    a+t - в файле могут присуцтвовать такие знаки как /n /t
    a+b - в файле не могут присуцтвовать такие знаки как /n /t
    fwrite() вписывает текст в файл
    fclose() - закрывает создание файла, оптимизирует код
    fread() выводит страку посимвольно
    feof() - Проверяет, достигнут ли конец файла
    fseek() — Устанавливает смещение в файловом указателе
    file_put_contents() - можно содать новый файл кароче но в первом методе
    больше функционала
    file_get_contents() - получает данные из файла
    file_exists() - проверяет файлы на существование
    filesize() - выводит размеры файла
    rename() - переименовывает файл
    unlink() - удаляет файл
    */

    // $file = fopen("a.txt", "a+t");
    // fwrite($file, "Example\nText\nNext");
    // fclose($file);

    $file = fopen("a.txt", "r+t");
    while (!feof($file)) {
        echo fread($file, 1)."<br/>";
    }

    fseek ($file, 0);
    echo fread($file, 1);

    fclose($file);

    echo "<hr/>";
    file_put_contents("c.txt", "TEST test Test");
    echo file_get_contents("c.txt")."<br/>";
    echo file_exists("a.txt")."<br/>";
    echo filesize("c.txt")."<br/>";

    rename("c.txt", "b.txt");
    unlink("b.text");

?>