<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ListCarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TagCarController;
use App\Http\Controllers\TagController;
use App\Models\Car;
use App\Models\ListCar;
use Illuminate\Support\Facades\Route;

Route::redirect('/','auth/login');
Route::get('auth/login',[LoginController::class,'auth'])->name('login');
Route::post('/login',[LoginController::class,'authenticate'])->name('authenticate');

Route::middleware('auth')->group(function(){   
});
Route::get('cars/create',[CarController::class,'create'])->name('cars');
Route::get('categories/create',[CategoryController::class,'create'])->name('categories');
Route::get('cars',[CarController::class,'index'])->name('cars.index');
Route::post('cars',[CarController::class,'store'])->name('cars.store');
Route::post('categories',[CategoryController::class,'store'])->name('categories.store');
Route::get('car/delete/{car}',[CarController::class,'destroy'])->name('cars.destroy');
Route::get('car/edit/{car}',[CarController::class,'edit'])->name('cars.edit'); 
Route::post('car/update/{car}',[CarController::class,'update'])->name('cars.update');
Route::get('tags/create',[TagController::class,'create'])->name('tags');
Route::post('tags',[TagController::class,'store'])->name('tags.store');
Route:: get('tagscars/create',[TagCarController::class,'create'])->name('tagscars');
Route::post('tagscars',[TagCarController::class,'store'])->name('tagscars.store');