<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegispeterController;
use App\Http\Controllers\RegisinvestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Landing Page
Route::get('/', function () {
    return view('index');
});

// Login Page
Route::get('/login', [LoginController::class, 'index']);


// Investor Registration Page
Route::get('/regis-invest', [RegisinvestController::class, 'index']); 
Route::post('/regis-invest', [RegisinvestController::class, 'addAcount']); 

// Peternak Registration Page
Route::get('/regis-peternak', [RegispeterController::class, 'index']);
Route::post('/regis-peternak', [RegispeterController::class, 'addAcount']);

// Dashboard
Route::post('/dashboard',[DashController::class, 'authenticate']);

// register Admin
Route::get('/admin',[AdminController::class,'index']);
Route::post('/admin',[AdminController::class,'addAdmin']);
