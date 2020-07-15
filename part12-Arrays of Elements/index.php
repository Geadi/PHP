<?php

    $array = array(12, -3.25, "String", true);
    // вывести элемент массива по индексу
    echo $array[1];
    // переназначить данные массива
    $array[1] = "String";
    $array[2] = 4.25;
    echo "<br/>".$array[1]."<br/>".$array[2];
    // слздать новый элемент массива
    $array[] = "New Element";
    // вывести новый элемент массива
    echo "<br/>".$array[4]."<hr/>";

    // пройтись по длине массива и вывести все его данные
    // count() - работает как длина массива
    for ($i = 0; $i < count($array); $i++) {
        echo "элемент массива с индексом $i = ".$array[$i]."<br/>";
    }


    // ассоциативный массив
    $list = array("age" => 12, "name" => "Alex", "schoolBoy" => true);

    $list ["age"] = 10;

    // аккумулятор
    $summa = 0;

    echo "<hr/>".getAverage (array ("first" => 12, "seconde" => 45, "third" => 23, "forth" => 55));


    //foreach() метод для перебора массивов
    function getAverage ($array) {
        foreach ($array as $key => $value) {
            $summa += $value;
        }
        return $summa / count($array);
    }

?>