<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [HomeController::class, 'home']);

Route::prefix('category')->group(function (){
    Route::get('/food-beverage', [CategoryController::class, 'food_beverage']);
    Route::get('/beauty-health', [CategoryController::class, 'beauty_health']);
    Route::get('/home-care', [CategoryController::class, 'home_care']);
    Route::get('/baby-kid', [CategoryController::class, 'baby_kid']); 
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);

Route::get('/transaction', [TransactionController::class, 'transaction']);