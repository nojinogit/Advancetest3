<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class,'index']);
Route::get('/confirmation',[ContactController::class,'confirmation']);
Route::post('/contact',[ContactController::class,'store']);
Route::get('/management',[ContactController::class,'management']);
Route::delete('/delete',[ContactController::class,'delete']);
Route::get('/search',[ContactController::class,'search']);

