<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DireccionController;


 

Route::apiResource('direcciones', DireccionController::class);