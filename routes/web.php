<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------*/

//ESP routes
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CycRentaMixtaController;
use App\Http\Controllers\CycDolaresRentaFijaController;
use App\Http\Controllers\CycPesosRentaFijaController;
use App\Http\Controllers\CycLiquidezController;
use App\Http\Controllers\RegulacionesController;

Route::get('/', InicioController::class);
Route::get('/cycrentamixta', CycRentaMixtaController::class);
Route::get('/cycdolaresrentafija', CycDolaresRentaFijaController::class);
Route::get('/cycpesosrentafija', CycPesosRentaFijaController::class);
Route::get('/cycliquidez', CycLiquidezController::class);
Route::get('/regulaciones', RegulacionesController::class);

//ENG routes
/*use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpenAccountController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FoundsController;

Route::get('/home', HomeController::class);
Route::get('/openaccount', OpenAccountController::class);
Route::get('/about', AboutController::class);
Route::get('/founds', FoundsController::class);*/

//FORM routes
use App\Http\Controllers\ContactController;
Route::post('/contact', ContactController::class);