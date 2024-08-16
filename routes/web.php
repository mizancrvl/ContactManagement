<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacts',[ContactController::class,'index']);
Route::get('/contacts/create',[ContactController::class,'create']);
Route::post('/contacts',[ContactController::class,'store']);
Route::get('/contacts/{id}',[ContactController::class,'showSpecific']);
Route::get('/contacts/{id}/edit',[ContactController::class,'edit']);
Route::post('/contacts/{id}',[ContactController::class,'update']);
Route::delete('/contacts/{id}',[ContactController::class,'delete']);
Route::get('name_search',[ContactController::class,'name_search']);
Route::get('name_sort',[ContactController::class,'name_sort']);