<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    public function index() {
        return view ('car/cars', [
            "title" => "Cars",
            "cars" => Cars::all()
        ]);
    }

    public function show($car)
    {
        return view('car/detail', [
            "title" => "detail car",
            "car" => Cars::find($car)
 ]);
}

}
