<?php
    $recepient = "aleeeeksey@yandex.ru";
    $sitename = "Название сайта";

    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
    $message = "Имя: $name \nТелефон: $phone";

    $pagetitle = "Новая заявка с сайта \"$sitename\"";
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; carset=\"utf-8\"\n From: $sitename");