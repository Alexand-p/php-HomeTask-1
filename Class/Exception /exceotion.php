<?php
try {
    echo 42;
    var_dump($_SERVER);
    throw new Exception('My first Exception');
    var_dump($_COOKIE);

}
catch (Throwable $exception){
   echo $exception ->getMessage();
   die;
}