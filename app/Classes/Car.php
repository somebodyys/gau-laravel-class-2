<?php

namespace App\Classes;

abstract class Car
{
    public int $id;
    public string $brand;
    protected string $color;
    private float $engine;

    public static int $NUMBER_OF_TIRES = 4;

    public function __construct(int $id, string $brand, string $color, float $engine)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->color = $color;
        $this->engine = $engine;
    }

    public function getEngine(){
        return $this->engine;
    }

    public function setEngine(float $engine){
        $engine = $engine + 12;

        $this->engine = $engine;
    }

    public function display(){
        return "Brand: $this->brand\nColor: $this->color\nEngine: $this->engine";
    }

    abstract function shutDown();
}
