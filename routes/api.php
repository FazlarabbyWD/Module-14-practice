<?php

use App\Http\Controllers\PracticeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/test',[PracticeController::class,'practice'])->name('practice');
Route::get('/test1/{name}/{age}',[PracticeController::class,'parameter'])->name('test1');
