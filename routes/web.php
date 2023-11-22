<?php

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

use App\Http\Controllers\DashboardController;

Route::get('', [DashboardController::class, 'index']);
use App\Http\Controllers\TourController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\BlogController;

Route::resource('tours', 'TourController');
// Tours routes
Route::get('/tours', [TourController::class, 'index'])->name('tours.index');
Route::get('/tours/create', [TourController::class, 'create'])->name('tours.create');
Route::post('/tours', [TourController::class, 'store'])->name('tours.store');
Route::get('/tours/{tour}', [TourController::class, 'show'])->name('tours.show');
Route::get('/tours/{tour}/edit', [TourController::class, 'edit'])->name('tours.edit');
Route::put('/tours/{tour}', [TourController::class, 'update'])->name('tours.update');
Route::delete('/tours/{tour}', [TourController::class, 'destroy'])->name('tours.destroy');

Route::resource('destinations', 'DestinationController');

Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations.index');
Route::get('/destinations/create', [DestinationController::class, 'create'])->name('destinations.create');
Route::post('/destinations', [DestinationController::class, 'store'])->name('destinations.store');
Route::get('/destinations/{destination}', [DestinationController::class, 'show'])->name('destinations.show');
Route::get('/destinations/{destination}/edit', [DestinationController::class, 'edit'])->name('destinations.edit');
Route::put('/destinations/{destination}', [DestinationController::class, 'update'])->name('destinations.update');
Route::delete('/destinations/{destination}', [DestinationController::class, 'destroy'])->name('destinations.destroy');

Route::resource('blogs', 'BlogController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
