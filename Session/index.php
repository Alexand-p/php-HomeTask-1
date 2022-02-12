<?php

$value = 'Muther fucker';
setcookie('user', $value, time() + (86400));

if(isset($_COOKIE['user'])) {
    echo "Value is: ". $_COOKIE['user'];
}