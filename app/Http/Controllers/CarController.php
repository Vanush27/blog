<?php

namespace App\Http\Controllers;


use App\Models\Car;

class CarController extends Controller
{

    public function car()
    {
        $cars = Car::all();
        return view('cars.car', compact('cars'));

    }
}
