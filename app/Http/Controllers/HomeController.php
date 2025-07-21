<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index(){
        $car = Car::all();
        $HitungCar = Car::count();

        return view('welcome',compact('car','HitungCar'));
    }
}
