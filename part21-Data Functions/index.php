<?php

    // time() возвращает количество секунд прошедших с 1 января 1970 года
    echo time()."<br/>";

    /* time() возвращает количество мили секунд прошедших с 1 января 1970 года
    если в элементы записать true то будит вывадить секунды и тысячные мили секунды*/
    echo microtime(true)."<br/>";

    $time - mktime(12, 35, 23, 12, 7, 2007)."<br/>";

    /* date() выводить сегодняшнее число. второй параметр принемает число секунд
    пройденных с 1 января 1970 года и выводит дату их суммы */
    echo date("Y-m-d H:i:s", $time)."<br/>";

    // getdate() возврашяет дату в массиве
    $array = getdate($time);
    print_r($array);

    echo "<br/>";

    // checkdate() проверяет число на существование
    echo checkdate(2, 28, 2012);

?>