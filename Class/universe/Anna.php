<?php

class Anna extends freeStudent
{

    /**
     * @var string
     */
 public string $name = 'Anna';

 public int $age = 21;

 public string $gender = 'women';

    public function getName():string
    {
        return $this->name;
    }
}