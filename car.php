<?php

class car
{
    private $color;
    private $weight;

    /**
     * @param $color
     * @param $weight
     */
    public function __construct($color, $weight)//with alt+Insert-> construct
    {
        $this->color = $color;
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getColor()//with alt+Insert-> getter and setter
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)//with alt+Insert-> getter and setter
    {
        $this->color = $color;
    }


}


