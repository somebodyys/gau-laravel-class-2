<?php

namespace App\Console\Commands;

use App\Classes\Car;
use App\Classes\ElectricCar;
use App\Classes\GasolineCar;
use Illuminate\Console\Command;

class CarCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'car:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $car = new Car("Ford", "Black", 12.9);
        $electric_car = new ElectricCar("Tesla", "Gray", 2, 200000);
        $gasoline_car = new GasolineCar("Honda", "Silver", 4.9, 80);

//        $car->brand = "Nissan";

//        $number_of_tires = Car::$NUMBER_OF_TIRES;

        dd($electric_car->inspect());

//        dd(
//            $electric_car->startEngine(),
//            $gasoline_car->startEngine()
//        );
    }
}
