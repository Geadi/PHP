<?php

    // Условные операторы if, elseif, else. Тернарный оператор.

    $x = 1;
    $y = "";

    // срабатывает первое условие

    if ($x == true)
        echo "Работет";
    else if ($y == false) {
        echo "не работет";
    }
    else {
        echo "ошибка";
    };

    echo "<br/>";

    $a = "";
    $b = "";

    // срабатывает второе условие

    if ($a == true)
        echo "Работет";
    else if ($b == false) {
        echo "Не работет";
    }
    else {
        echo "ошибка";
    };

    echo "<br/>";

    // срабатывает третье условие

    if ($a == true)
        echo "Работет";
    else if ($b == true) {
        echo "Не работет";
    }
    else {
        echo "Ошибка";
    };

    echo "<br/>";

    // Тернарный оператор
    // условие ? правда : лож

    $v = 1;

    $v == true ? $res = "Работет" : $res = "Не работет";

    echo $res;

?>