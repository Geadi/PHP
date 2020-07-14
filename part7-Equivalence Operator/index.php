<?php

    // === - оператор эквивалентности. Проверяет типы сравниваемых данных (Строгое сравнение)

    $string = "Example";
    $num = 0;

    $bool_1 = $string == true;
    echo "$bool_1 = $string == true;";

    $bool_2 = $num == "";
    echo "<br/>$bool_2 = $num == \"\";<hr/>";

    $bool_3 = $num == true;
    echo "<br/>$bool_3 = $string == true;";

    $bool_4 = $num === "";
    echo "<br/>$bool_4 = $num == \"\";";
    
?>