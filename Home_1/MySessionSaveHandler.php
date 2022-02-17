<?php
require_once 'index.php';
class MySessionSaveHandler implements SessionHandlerInterface
{

    public function close()
    {
        $foo = '1';
    }

    public function destroy($id)
    {

    }

    public function gc($max_lifetime)
    {
        $max_lifetime = 86400;
    }

    public function open($path, $name)
    {
        $path = '/var/www/learn/Home_1/Session';
        $name = 'sesid';
    }

    public function read($id)
    {

    }

    public function write($id, $data)
    {
        $foo = $id;
        $dar = $data;
    }
}