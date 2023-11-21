<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\MotorcyclesController;
use App\Http\Controllers\TruckController;
Route::get('/cars', [CarsController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home', [
//         "title" => "Home",
//         ]);
// });

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Acaryanandana Alif Fajar",
        "absen" => "03",
        "kelas" => "11 PPLG 1",
        "foto" => "images/pj.jpg"]);
});

Route::get('/cars', [CarsController::class, 'index']);
Route::get('/cars/{car}', [CarsController::class, 'show']);

Route::get('/motorcycles', [MotorcyclesController::class, 'index']);
Route::get('/motorcycles/{motorcycles}', [MotorcyclesController::class, 'show']);

Route::get('/truck', [TruckController::class, 'index']);
Route::get('/truck/{truck}', [TruckController::class, 'show']);








