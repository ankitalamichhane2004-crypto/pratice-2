<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Table/table',[FrontendController::class,'index'])->name('table');
Route::get('Table/form',[FrontendController::class,'create'])->name('form');
Route::POST('Table/store',[FrontendController::class,'store'])->name('store');
Route::get('Table/show/{id}',[FrontendController::class, 'show'])->name('show');
Route::get('Table/edit/{id}',[FrontendController::class, 'edit'])->name('edit');
Route::POST('Table/update/{id}',[FrontendController::class,'update'])->name('update');
Route::POST('Table/delete/{id}',[FrontendController::class,'destroy'])->name('delete');



