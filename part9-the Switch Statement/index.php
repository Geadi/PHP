<?php

    // Конструкция switch имеет один или более блок case и необязательный блок default.
    // Работает как нестрогое сравнение.
    
    $x = 7;

    switch ($x) {
        case "Hello" : echo "Это строчная переменная"; break;
        case 5 : echo "Это переменная равна 5"; break;
        case 7 : echo "Это переменная равна 7"; break;
        case 12 : echo "Это переменная равна 12"; break;
        default : echo "Это переменная нам не известна";
    }

?>