<?php

class car
{
    private $color;
    private $weight;

    public function __construct($color = "green", $weight = 3000)//execute after creat object
    {
        $this->color = $color;
        $this->weight = $weight;
    }
    public function getColor(){
        return $this-> color;
    }
    public function __destruct()
    {
        echo "i am destroyed".@$this->color.PHP_EOL;
    }
}

$myCar = new car("red", 204);
$myCar2 = new car();
echo $myCar->getColor().PHP_EOL;
echo $myCar2->getColor();

unset($myCar);//destroyed obj manually
sleep(2);//freeze the compiler

