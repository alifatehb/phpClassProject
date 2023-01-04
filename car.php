<?php

class car
{
    public $color;
    public $manufacturer;

    const MANUFACTURER_BMW = "BMW";
    const MANUFACTURER_TESLA = "TESLA";
    const MANUFACTURER_MERCEDES = "MERCEDES";

    const COLOR_RED = 'red';
    const COLOR_GREEN = 'green';
    const COLOR_BLUE = 'blue';
    public  function __construct($color,$manufacturer)
    {
        $this->color = $color;
        $this->manufacturer = $manufacturer;

    }
}

$myCar = new car(car::COLOR_BLUE,car::MANUFACTURER_BMW);
var_dump($myCar);

