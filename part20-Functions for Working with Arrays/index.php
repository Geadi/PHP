<?php

    $array = array(12, 17, 5, 23, 56);

    // count() узнать количество элементов массива
    echo count($array)."<br/>";

    // sort() сортирует массив по возрастанию
    sort($array);
    print_r($array);
    echo "<br/>";

    // rsort() сортирует массив по убыванию
    rsort($array);
    print_r($array);
    echo "<br/>";

    // asort() cортирует массив по убываню, сохраняя ключи
    asort($array);
    print_r($array);
    echo "<br/>";

    $alist = array("a" => 23, "b" => 45, "c" => 32);
    // arsort() cортирует массив по возрастанию, сохраняя ключи
    arsort($alist);
    print_r($alist);
    echo "<br/>";

    // arsort() cортирует ключи массива по возрастанию
    ksort($alist);
    print_r($alist);
    echo "<br/>";

    // shuffle() перемешивает элементы массива
    shuffle($array);
    print_r($array);
    echo "<br/>";

    // in_array() проверяет элемент массива на существование
    echo in_array(12, $array);
    echo "<br/>";

    $arr_1 = array(10, 2);
    $arr_2 = array(4, 5, 7);

    // array_merge() соединяет 2 массива в 1
    $array_3 = array_merge($arr_1, $arr_2);
    print_r($array_3);
    echo "<br/>";

    $arrDone = array (1, 2, 3, 4, 5, 6, 7);

    print_r($arrDone);
    echo "<br/>";
    // array_slice() убрать элементы массива
    $arrDone = array_slice($arrDone, 1);
    print_r($arrDone);
    echo "<br/>";

?>