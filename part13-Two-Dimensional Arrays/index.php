<?php

    // мамив в массиве это двумерный массив
    $array = array (array(12, 4.46, "string", true), array("Example"), array(45, "strong"));

    // вызов переменной из 2 массива
    echo $array[0][2]."<hr/>";

    // перебор, и вывод двумерного массива
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            echo $array[$i][$j]."  ";
        }
        echo "<br/>";
    }

?>