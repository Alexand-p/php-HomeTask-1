<?php

require_once 'Student.php';

class paidStudent extends Student
{
    /**
     * @var bool
     */
    public bool $passedExam = false;

    /**
     * @var int
     */
    public int $missedHours = 120;
}