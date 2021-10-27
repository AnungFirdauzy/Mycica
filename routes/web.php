<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataViewController;
use App\Http\Controllers\DataBurungController;
use App\Http\Controllers\KatalogInvestor;
use App\Http\Controllers\PFinvestorController;
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

// Registrasi Investor Page
Route::get('/regis-invest', [RegisinvestController::class, 'index']); 
Route::post('/regis-invest', [RegisinvestController::class, 'addAcount']); 

// Peternak Registration Page
Route::get('/regis-peternak', [RegispeterController::class, 'index']);
Route::post('/regis-peternak', [RegispeterController::class, 'addAcount']);

// Register Admin
Route::get('/admin',[AdminController::class,'index']);
Route::post('/admin',[AdminController::class,'addAdmin']);

// Profil Investor
Route::get('/profil/{id}/investor',[PFinvestorController::class,'index']);
Route::get('/profil/edit/investor/{id}',[PFinvestorController::class,'Vedit']);
Route::post('/profil/edit/investor/{id}',[PFinvestorController::class,'edit']);

// Profil Peternak
Route::get('/profil/{id}/peternak',[PFinvestorController::class,'Tedit']);
Route::get('/profil/edit/peternak/{id}',[PFinvestorController::class,'VTedit']);
Route::post('/profil/edit/peternak/{id}',[PFinvestorController::class,'Pedit']);


// Dashboard
Route::post('/dashboard',[DashController::class, 'authenticate']);

// Tabel Data Investor
Route::get('/data/investor/{id}',[DataViewController::class,'dataInvestor']);
Route::get('/detail/investor/{id}',[DataViewController::class,'dataInvestordetail']);

// Tabel Data peternak
Route::get('/data/peternak/{id}',[DataViewController::class,'datapeternak']);
Route::get('/detail/peternak/{id}',[DataViewController::class,'datapeternakdetail']);

// Katalog
Route::get('/katalog/{id}',[DataBurungController::class,'index']);
Route::get('/add-burung/{id}',[DataBurungController::class,'addDataV']);
Route::post('/add-burung/{id}',[DataBurungController::class,'addDataC']);
Route::get('/edit-burung/{id}',[DataBurungController::class,'editDataV']);
Route::post('/edit-burung/{id}',[DataBurungController::class,'editDataC']);

// Katalog Investor
Route::get('/katalog-invest/{id}',[KatalogInvestor::class,'index']);

