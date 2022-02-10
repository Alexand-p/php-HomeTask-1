<?php
$names = [
    "Alex" => "22",
    "Dmitry" => "22",
    "Bob" => "21",
    "Emily" => "22",
    "Rita" => "21",
];
class ListFree extends freeStudent
{
    public function getName(): string
    {
        return $this->name;
    }



}