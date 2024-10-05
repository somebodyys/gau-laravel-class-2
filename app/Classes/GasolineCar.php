<?php

namespace App\Classes;

use App\Interfaces\Drivable;
use App\Traits\NeedsInspection;

class GasolineCar extends Car implements Drivable
{
    use NeedsInspection;

    public float $fuel_capacity;

    public function __construct(string $brand, string $color, float $engine, float $fuel_capacity)
    {
        parent::__construct($brand, $color, $engine);

        $this->fuel_capacity = $fuel_capacity;
    }

    public function startEngine()
    {
        return "Starting Gasoline Engine...";
    }

    public function shutDown()
    {
        return "Shutting Down!";
    }
}
