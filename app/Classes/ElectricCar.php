<?php

namespace App\Classes;

use App\Interfaces\Drivable;
use App\Interfaces\Flyable;
use App\Traits\NeedsInspection;

class ElectricCar extends Car implements Drivable, Flyable
{
    use NeedsInspection;

    public float $battery_capacity;

    public function __construct(string $brand, string $color, float $engine, float $battery_capacity = 5)
    {
        parent::__construct($brand, $color, $engine);

        $this->battery_capacity = $battery_capacity;
    }


    public function display()
    {
        $temp = parent::display();

        return "$temp\nCapacity: $this->battery_capacity";
    }

    public function startEngine()
    {
        return "Starting Electric Engine....";
    }

    public function shutDown()
    {
        return "Shutting Down!";
    }

}
