<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkaterController;
use App\Http\Controllers\SkateSpotController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['controller' => SkaterController::class, 'middleware' => 'auth'], function (){
    Route::get('/skaters', 'index')->name('skater.index');
    Route::get('/skaters/search', 'skaterSearch')->name('skater.search');
    Route::get('/skaters/{skater}', 'show')->name('skater.show');
});


Route::group(['controller' => SkateSpotController::class, 'middleware' => 'auth'], function () {
    Route::get('/spots', 'index')->name('spots.index');
    Route::get('/spots/{skateSpot}', 'show')->name('spots.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
