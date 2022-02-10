<?php

require_once 'Student.php';

abstract class paidStudent extends Student
{
    public abstract function getName():string;
    /**
     * @var bool
     */
    public bool $passedExam = false;

    /**
     * @var int
     */
    public int $missedHours = 120;
}