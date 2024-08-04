<?php

use App\Http\Controllers\Api\HistoryTontonController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'/login']);

