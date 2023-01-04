<?php

class car
{
    private $color;
    private $weight;
    private $year;
    private $availableColors = [
        'red', 'green', 'blue', 'white'
    ];

    public function setYear($Year)
    {
        $this->year = $Year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setColor($color)
    {
        if (in_array($color, $this->availableColors)) {
            $this->color = $color;
        }
    }

    public function getColor()
    {
        return $this->color;
    }
}

$car = new car();
$car->setColor("red");
$car2 = clone $car; // two different object
$car3 = $car; //same pointer
$car4 = & $car;//same object
$car->setYear(1010);
var_dump($car,$car2);
