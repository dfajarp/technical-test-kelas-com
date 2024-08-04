<?php

use App\Http\Controllers\Api\DistributionController;
use App\Http\Controllers\Api\HistoryTontonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/create-watch-history', [HistoryTontonController::class, 'store']);
Route::get('/distribution', [DistributionController::class, 'index']);
