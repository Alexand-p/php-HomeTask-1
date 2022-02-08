<?php

class Student implements StudentInterface
{

    /**
     *
     */
    public string $name;

    /**
     * @var int
     */
    public int $age;

    /**
     *
     */
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


    function missedLesson()
    {

    }

    function paidEducation()
    {
        if (($this->missedHours === 0 && $this->passedExam === true)) {
            $this->freeEducation = true;
        } else {
            $this->freeEducation = false;
        }
    }

    function resultExam()
    {
        echo $this->passedExam;
    }

}

