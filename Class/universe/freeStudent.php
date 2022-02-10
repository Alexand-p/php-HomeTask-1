<?php


abstract class freeStudent extends Student
{
 public abstract function getName():string;


    /**
     * @var int
     */
   public int $missedHours = 0;

  protected bool $scholarship = true;


}