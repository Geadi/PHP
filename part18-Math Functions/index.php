<?php

    // Значение констант M_PI, M_E
    echo M_PI."<br/>".M_E."<br/>";

    $x = -15;
    // abs() - узнать значение по модулю
    echo abs($x)."<br/>";

    $y = 34.23427878;
    // round() округляет числа к большему и меньшему
    echo round($y)."<br/>";
    // ceil() округляет числа к большему
    echo ceil($y)."<br/>";
    // floor() округляет числа к меньшему
    echo floor($y)."<br/>";
    // mt_rand() найти целлое число от и до 
    echo mt_rand(0, 10)."<br/>";
    // min() найти минимальное значение. -5 максимально минимальное
    echo min(-5, 10, 12, -3, 0, 33)."<br/>";
    // max() найти наивысшее значение
    echo max(-5, 10, 12, -3, 0, 33)."<br/>";

    $z = 1;
    // sin() найти синус
    echo sin($z)."<br/>";
    // sin() найти тангенс
    echo tan($z)."<br/>";
    // asin() найти а синус
    echo asin($z)."<br/>";
    // atan() найти а тангенс
    echo atan($z)."<br/>";

?>