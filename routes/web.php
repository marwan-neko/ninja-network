<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/ninjas', action: [NinjaController::class, 'index'])->name('ninjas.index');
Route::get('/ninjas/create', [NinjaController::class,'create'])->name('ninjas.create');
Route::get('/ninjas/{ninja}', [NinjaController::class,'show'])->name('ninjas.show');
Route::post('/ninjas', [NinjaController::class,'store'])->name('ninjas.store');
Route::put('/ninjas/{ninja}', [NinjaController::class,'update'])->name('ninjas.update');
Route::delete('/ninjas/{ninja}', [NinjaController::class,'destroy'])->name('ninjas.destroy');