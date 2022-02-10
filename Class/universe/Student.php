<?php

class Student implements StudentInterface
{

    /**
     * @var string 
     */
//    public string $name;

    /**
     * @var int
     */
//    public int $age;


    public static string $gender ;

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
    protected bool $isActivist;

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

    public function resultExam() : bool
    {
        echo $this->passedExam;
    }

}

