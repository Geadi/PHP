<?php

    /* Вместо куки безопаснее использовать сессии. Куки хранятся в браузере, сесси на сервере
    session_start() - создает сессию
    session_destroy() - удаляет  сессию*/
    session_start();
    $num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
    $num++;
    $_SESSION["num"] = $num;
    echo "Пользователь обновил страницу $num раз";

    session_destroy();

?>