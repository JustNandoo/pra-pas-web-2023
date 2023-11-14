<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motorcycles; 

class MotorcyclesController extends Controller
{
    public function index() {
        return view('motorcycles.motorcycles', [
            "title" => "Cars",
            "motorcycles" => Motorcycles::all() 
        ]);
    }

    public function show($motorcycle)
    {
        return view('motorcycles.motordetail', [
            "title" => "Detail Motorcycles",
            "motorcycle" => Motorcycles::find($motorcycle) 
        ]);
    }
}
