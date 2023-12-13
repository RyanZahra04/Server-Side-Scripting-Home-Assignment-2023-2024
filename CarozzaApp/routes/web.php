<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CarController::class, 'index']);

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/manufacturers', [ManufacturerController::class, 'index'])->name('manufacturers.index');
Route::get('/cars/create', [CarController::class, 'create']);
Route::get('/cars/{id}', [CarController::class, 'details'])->name(('cars.details'));
Route::get('/cars/{id}/edit', [CarController::class, 'edit']);
