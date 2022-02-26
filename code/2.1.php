<?php

$text = $_POST["text"];
echo "Текст: ",  $text, "\nКол-во слов: ", str_word_count($text), "\nКол-во символов: ", strlen($text);