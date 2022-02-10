<?php

require_once 'Student.php';

class Alex extends paidStudent
{
    /**
     * @var string
     */
   public string $name = 'Alex';

   public int $age = 22;

    public function getName(): string
    {
        return $this->name;
    }
}

