<?php
session_start();

if(!empty($_POST["name"]) and !empty($_POST["surname"]) and !empty($_POST["age"])) {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["age"] = $_POST["age"];
}

if (!empty($_SESSION)) {
    echo "Ваше имя ", $_SESSION["name"], "<br>";
    echo "Ваша фамилия ", $_SESSION["surname"], "<br>";
    echo "Вам ", $_SESSION["age"], "лет", "<br>";
    session_destroy();
}