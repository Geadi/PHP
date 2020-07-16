<?php

    /* 
    isset() - метод который ищет переменную заданную в параметр.

    unset() - метод который удаляет переменную заданную в параметр,
    чаще всего используют в массивах удаляя элементы по индексу $x[0].


    .is_numeric() - метод который ищет переменную заданную в параметр,
    и проверяет является ли она цифрой !! ВАЖНО: Проверяет не тип данных,
    а само наличие цифр !!

    .is_integer() - метод который ищет переменную заданную в параметр,
    и проверяет является ли она цифрой !! ВАЖНО: Проверяет тип данных,
    а не само наличие цифр !!

    .is_double() - метод который ищет переменную заданную в параметр,
    и проверяет является ли она переменной типа float - то есть 
    не целым числом.     Числа 142857; 0; −273 являются целыми.
                         Числа 5½; 9,75 не являются целыми.

    .is_string() - метод который ищет переменную заданную в параметр,
    и проверяет является ли она переменной типа string.

    .is_bool() - метод который ищет переменную заданную в параметр,
    и проверяет является ли она переменной типа boolean.

    .is_scalar() - метод который ищет переменную заданную в параметр,
    и проверяет является ли она простым типом данных.

    .is_null() - метод который ищет переменную заданную в параметр,
    и проверяет является ли она переменной типа null.

    .is_array() - метод который ищет переменную заданную в параметр,
    и проверяет является ли она переменной типа array.

    .gettype() - метод который ищет переменную заданную в параметр,
    и возврашяет его тип данных аналог typeof - JavaScript.
    */

    $x = 15;
    if (isset($x)) echo "Переменная существует"."<br/>";
    else echo "Переменная не существует"."<br/>";

    unset($x);
    if (isset($x)) echo "Переменная существует"."<br/>";
    else echo "Переменная не существует"."<br/>";

    $x = 15;
    $bool = false;
    $null;

    echo "Is Numeric - ".is_numeric($x)."<br/>";
    echo "Is Integer - ".is_integer($x)."<br/>";
    echo "Is Double - ".is_double($x)."<br/>";
    echo "Is String - ".is_string($x)."<br/>";
    echo "Is Boolean - ".is_bool($bool)."<br/>";
    echo "Is Scalar - ".is_scalar($bool)."<br/>";
    echo "Is null - ".is_null($null)."<br/>";
    echo "Is Type - ".gettype($x)."<br/>";

?>