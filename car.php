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
    public function getColor(){
        return $this->color;
    }
}

$myCar = new car();
$myCar->setColor("red");

echo $myCar->getColor();
