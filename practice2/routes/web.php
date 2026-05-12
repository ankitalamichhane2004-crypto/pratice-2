<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/table',[FrontendController::class,'index'])->name('table');
Route::get('/form',[FrontendController::class,'create'])->name('form');
Route::POST('/store',[FrontendController::class,'store'])->name('store');