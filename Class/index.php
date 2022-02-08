<?php

require_once 'universe/Student.php';
require_once 'universe/Alex.php';
require_once 'universe/freeStudent.php';
require_once 'universe/paidStudent.php';


$student = new Student();
$alex = new Alex();
$free = new freeStudent();

echo $alex -> gender;
echo $free ->passedExam;


