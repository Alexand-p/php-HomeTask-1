<?php
class Student{
    public $age = 14;
    public $name = 'Alex';
    public function printData()
    {
        echo $this->name;
        echo $this->age;
    }
}
echo  'printData';