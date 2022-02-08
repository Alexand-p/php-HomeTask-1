<?php

require_once 'Student.php';

class paidStudent extends Student
{
    public bool $passedExam = false;
    public int $missedHours = 120;
}