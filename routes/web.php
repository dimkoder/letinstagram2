<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () { return view('welcome'); });
//Route::get('/', [\App\Http\Controllers\MainController::class, 'index'] );
Route::get('/', [MainController::class, 'index'] );
Route::get('test', [MainController::class, 'php'] );
