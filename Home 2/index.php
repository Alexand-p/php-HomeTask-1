<?php
$count = 0;
if (isset($_COOKIE['counter'])) {
    $count = $_COOKIE['counter'] + 1;
} else {
    $count ++;
}
setcookie('counter', $count, time() + 86400);
echo 'Вы заходил'.$count.'раз';


