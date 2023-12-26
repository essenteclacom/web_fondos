<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------*/

//ESP routes
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CycRentaMixtaController;
use App\Http\Controllers\CycDolaresRentaFijaController;
use App\Http\Controllers\CycPesosRentaFijaController;
use App\Http\Controllers\CycLiquidezController;
use App\Http\Controllers\RegulacionesController;
use App\Http\Controllers\EspController;

Route::get('/', DefaultController::class);
Route::get('/inicio', InicioController::class);
Route::get('/cycrentamixta', CycRentaMixtaController::class);
Route::get('/cycdolaresrentafija', CycDolaresRentaFijaController::class);
Route::get('/cycpesosrentafija', CycPesosRentaFijaController::class);
Route::get('/cycliquidez', CycLiquidezController::class);
Route::get('/regulaciones', RegulacionesController::class);
Route::get('/esp', EspController::class);

//ENG routes
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CycMixRentController;
use App\Http\Controllers\CycUsdFixedRentController;
use App\Http\Controllers\CycPesosFixedRentController;
use App\Http\Controllers\CycLiquidController;
use App\Http\Controllers\RegulationsController;
use App\Http\Controllers\EngController;

Route::get('/home', HomeController::class);
Route::get('/cycmixrent', CycMixRentController::class);
Route::get('/cycusdfixedrent', CycUsdFixedRentController::class);
Route::get('/cycpesosfixedrent', CycPesosFixedRentController::class);
Route::get('/cycliquid', CycLiquidController::class);
Route::get('/regulations', RegulationsController::class);
Route::get('/eng', EngController::class);


//FORM routes
use App\Http\Controllers\ContactController;
Route::post('/contact', ContactController::class);