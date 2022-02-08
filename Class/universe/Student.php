<?php

class Student implements StudentInterface
{

    /**
     * @var string 
     */
    public string $name;

    /**
     * @var int
     */
    public int $age;


    public string $gender ;

    /**
     * @var int
     */
    public int $missedHours ;
//    minutes

    /**
     * @var bool
     */
    public bool $passedExam = true;

    /**
     * @var bool
     */
    public bool $isActivist;

    /**
     * @var bool
     */
    public bool $freeEducation;


    /**
     * @return void
     */


    public function missedLesson()
    {

    }

    public function paidEducation() : bool
    {
        if (($this->missedHours === 0 && $this->passedExam === true)) {
            $this->freeEducation = true;
        } else {
            $this->freeEducation = false;
        }
        return $this->freeEducation;
    }

    public function resultExam()
    {
        echo $this->passedExam;
    }

}

