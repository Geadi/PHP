<?php

    // Циклы for while и do while


    // если одно условие то можно писать без скобок
    for ($i = 0; $i < 10; $i++) echo "1";

    echo "<br/>";

    for ($i = 0; $i < 10; $i++) {
        echo "<br/>";
        echo "1";
    }

    echo "<br/>";

    // break - если условие цикла true то он останавливается

    //  continue - если условие цикла true то он в отличии от 
    //  break не прерывается а переходит к следующей итерации

    for ($i = 100; $i >= 80; $i -= 2) {
        if($i % 5 == 0) continue;
        if($i <= 87) break;
        echo "Номер $i <br/>";
    }

    echo "<br/>";

    // в while начальное значение пишется снаружи

    $x = 0; 

    while ($x < 10) {
        echo "Номер $x <br/>";
        $x++;
    }

    echo "<br/>";

    // вложенный цикл 

    $r = 0; 

    while ($r < 10) {
        if($r == 7)
            for ($y = 0; $y < 5; $y += 3)
                echo "Еше один номер - $y<br/>";
        echo "Номер $r <br/>";
        $r++;
    }

    echo "<br/>";

    // do while

    $z = 10;

    echo "<br/>";

    do {
        echo "Операция выполняется только один раз";
        $z++;
    } while ($z < 5);

?>