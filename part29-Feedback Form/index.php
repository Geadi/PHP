<?php

    session_start();
    if(isset($_POST["send"])) {
        $from = htmlspecialchars($_POST["from"]);
        $to = htmlspecialchars($_POST["to"]);
        $subject = htmlspecialchars($_POST["subject"]);
        $massage = htmlspecialchars($_POST["massage"]);
        $_SESSION["from"] = $from;
        $_SESSION["to"] = $to;
        $_SESSION["subject"] = $subject;
        $_SESSION["massage"] = $massage;
        $error_from = "";
        $error_to = "";
        $error_subject = "";
        $error_massage = "";
        $error = false;
        if($from == "" || !preg_match("/@/", $from)) {
            $error_from = "Введите корректный email";
            $error = true;
        }
        if($to == "" || !preg_match("/@/", $to)) {
            $error_to = "Введите корректный email";
            $error = true;
        }
        if(strlen($subject) == 0) {
            $error_subject = "Введите тему сообщения";
            $error = true;
        }
        if(strlen($massage) == 0) {
            $error_massage = "Введите сообщение";
            $error = true;
        }
        if(!$error) {
            $subject = "=?utf-8?B?".base64_encode($subject)."?=";
            $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
            mail($to, $subject, $message, $headers);
            header("Location: success.php?send=1");
            exit;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь</title>
</head>
<body>
    <h2>Форма обратной связи</h2>
    <form action="" name="feedback" method="post">
        <label>От кого: </label><br/>
        <input type="text" name="from" value="<?=$_SESSION["from"] ?>">
        <span style="color: red;"><?=$error_from?></span>
        <br/>
        <label>От кого: </label><br/>
        <input type="text" name="to" value="<?=$_SESSION["to"] ?>">
        <span style="color: red;"><?=$error_to?></span>
        <br/>
        <label>Тема: </label><br/>
        <input type="text" name="subject" value="<?=$_SESSION["subject"] ?>">
        <span style="color: red;"><?=$error_subject?></span>
        <br/>
        <label>Сообщение: </label><br/>
        <textarea name="massage" cols="30" rows="10"><?=$_SESSION["massage"]?></textarea>
        <span style="color: red;"><?=$error_massage?></span><br/>
        <input type="submit" name="send" value="Отправить">

    </form>
</body>
</html>