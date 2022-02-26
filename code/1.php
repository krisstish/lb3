<?php

$str = "ahb acb aeb aeeb adcb axeb";
$reg = "/a\w{2}b/";
preg_match($reg,$str);

function cube($num) {
    $result = pow($num[0], 3);
    return $result;
}
echo preg_replace_callback('/\d+/', 'cube', 'a1b2c3');