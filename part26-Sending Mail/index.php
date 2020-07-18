<?php

    // Отправка сообщений на email

    // mail отправляет сообшение на email принемает 4 параметра
    // переход на новую строку \n

    $massage = "text text text text";
    $to = "massage@gmail.com";
    $from = "";
    $subject = "Тема сообщения";
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";

    mail($to, $subject, $massage, $headers);

?>