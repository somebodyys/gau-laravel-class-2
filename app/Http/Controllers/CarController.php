<?php

namespace App\Http\Controllers;

use App\Classes\ElectricCar;
use App\Http\Requests\cars\StoreCarRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(): JsonResponse
    {
        $cars = [];

        for ($i = 0; $i < 10; $i++) {
            $car = new ElectricCar($i + 1, 'Ford', 'Blue', 18, 1000);
            $cars[] = $car;
        }

        return response()->json([
            'cars' => $cars
        ]);
    }

    public function store(StoreCarRequest $request): JsonResponse
    {
        $all = $request->all();
        $payload = $request->validated();

        dd([
            'all' => $all,
            'payload' => $payload
        ]);
        $car = new ElectricCar(1, $request->get('brand'), $request->get('color'), $request->get('engine'), $request->get('battery_capacity'));

        return response()->json([
            'car' => $car
        ]);
    }

    public function show(Request $request, $id): JsonResponse{
        $cars = [];

        for ($i = 0; $i < 10; $i++) {
            $car = new ElectricCar($i + 1, 'Ford', 'Blue', 18, 1000);
            $cars[] = $car;
        }

        return response()->json([
            'car' => collect($cars)->firstWhere('id', $id)
        ]);
    }

    public function destroy(Request $request, $id): JsonResponse{
        $cars = [];

        for ($i = 0; $i < 10; $i++) {
            $car = new ElectricCar($i + 1, 'Ford', 'Blue', 18, 1000);
            $cars[] = $car;
        }

        $car = collect($cars)->firstWhere('id', $id);

        return response()->json([
            'car' => $car,
            'message' => 'Car deleted successfully'
        ]);
    }
 }
