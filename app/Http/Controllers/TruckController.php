<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
   
    public function index() {
        return view('truck.truck', [
            "title" => "truck",
            "trucks" => Truck::all() 
        ]);
    }

    public function show($truck)
    {
        return view('truck.truckdetail', [
            "title" => "Detail Trucks",
            "trucks" => Truck::find($truck) 
        ]);
    }

}
