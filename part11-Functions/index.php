<?php

    // Функции PHP

    function result() {
        echo "Name : You";
    }

    // вызов функции
    result();

    echo "<br/>";

    
    // присвоение оргумента
    function result_1($a) {
        echo $a;
    }

    result_1("hi");

    echo "<br/>";

    //функция отрисовывает 
    function render ($ren) {
        echo $ren;
    }

    function math ($first, $second) {
        $summa = $first + $second;
        return $summa;
    }

    $z = 10;
    $x = 30;

    $sum = math($z, $x);
    render($sum);

    echo "<br/>";

    function render_1 ($ren_1 ,$y, $v) {
        $ren_1 = math_1($y, $v);
        echo $ren_1;
    }

    function math_1 ($first_1, $second_1) {
        $summa_1 = $first_1 + $second_1;
        return $summa_1;
    }

    $y = 10;
    $v = 30;

    render_1($sum_1, $y, $v);
?>