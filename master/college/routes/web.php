<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RoadController;
use App\Http\Controllers\CollegeController;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/colleges', CollegeController::class);

Route::resource('/students', StudentController::class);

Route::resource('/buses', BusController::class);

Route::resource('/drivers', DriverController::class,);

Route::resource('/roads', RoadController::class);