<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CarController;


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

Route::get('/', [LandingController::class, 'index'])->name('index');
Route::post('/register', [LandingController::class, 'register'])->name('register');
Route::post('/login', [LandingController::class, 'login'])->name('login');
Route::get('/logout', [LandingController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/load', [DashboardController::class, 'load'])->middleware('auth')->name('load');


Route::prefix('/car')->name('car.')->middleware('auth')->group(function () {
    Route::get('/', [CarController::class, 'index'])->name('index');
    Route::get('/add', [CarController::class, 'add'])->name('add');
    Route::post('/add-car', [CarController::class, 'addCar'])->name('add-car');
    Route::post('/rent', [CarController::class, 'rent'])->name('rent');
    Route::post('/rent-car', [CarController::class, 'rentCar'])->name('rent-car');
    Route::get('/return', [CarController::class, 'return'])->name('return');
    Route::post('/return-car', [CarController::class, 'returnCar'])->name('return-car');
    Route::get('/datatables', [DashboardController::class, 'dataTables'])->name('datatables');
    Route::get('/datatables-return', [CarController::class, 'dataTablesReturn'])->name('datatables-return');
});

