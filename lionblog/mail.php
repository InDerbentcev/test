<?php

$recepient = "youmail@ya.ru";
$sitename = "Site name";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$text = trim($_GET["text"]);

$pagetitle = "New order \"$sitename\"";
$message = "Name: $name \nPhone: $phone \nText: $text";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");