<?php

class car
{
    public $color;
    private $weight;
    static  $counter= 0;
    public $myCounter= 0;
    public  function __construct()
    {
        $this->myCounter++;
        self::$counter++;
    }
}

$myCar = new car();
echo car::$counter."  ".$myCar->myCounter."<br>";
$myCar2 = new car();
echo car::$counter."  ".$myCar2->myCounter."<br>";

