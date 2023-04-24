<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/index1', [ContactController::class,'index1']);
Route::get('/index2', [ContactController::class,'index2']);
Route::get('/confirmation',[ContactController::class,'confirmation']);
Route::post('/contact',[ContactController::class,'store']);
Route::get('/management',[ContactController::class,'management']);
Route::delete('/delete',[ContactController::class,'delete']);
Route::get('/search',[ContactController::class,'search']);

