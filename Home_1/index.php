<?php
require_once 'MySessionSaveHandler.php';
$myHandler = new MySessionSaveHandler;
session_set_save_handler($myHandler, true);


$r = 0;
$r++;

$hello = json_encode('hello PHP');
$stat = session_id($r);


$newFile = fopen('./Session/sesid_{' . $r . '}.json', 'w');
$write = fwrite($newFile, $hello);

$maxLifetime = ini_set('session.gc_maxlifetime', 86400);
$max = ini_get('session.gc_maxlifetime');


session_start();
//SessionHandler::read($_SESSION);
session_name('sesid');
$_SESSION['foo'] = 'bat';
$_SESSION['for'] = 'bac';
$_SESSION['foe'] = 'bit';
$_SESSION['foy'] = 'bay';
$_SESSION['fot'] = 'oh';
$_SESSION['foi'] = 'bar';
$_SESSION['arr'] = [1, 2, '3', 4, '5', '6'];
$_SESSION['twoArr'] = ['one', 'two', [3, 3.3, 3.4]];
//SessionHandler::write($stat,$_SESSION);
$setJsonFile = json_encode($_SESSION);
$writeJSon = fwrite($newFile, $setJsonFile);

unset($_SESSION['foo']);

$destroy = session_destroy();

//Для того чтобы отчистить $_SESSION => $_SESSION = [];

echo '<pre>';
print_r($destroy);
echo '</pre>';
echo $max . 'Что равно 24ч';
echo '<br>';
echo $r;
$closeSession = session_write_close();
$close = fclose($newFile);
SessionHandler::close();
//echo $closeSession;


