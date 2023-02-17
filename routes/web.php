<?php

use App\Http\Controllers\Admin\AdminSkateSpotController;
use App\Http\Controllers\Admin\AdminUserController;
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

Route::get('/admin/dashboard', function () {
    return view('admin.index');
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



Route::group(['controller' => AdminUserController::class, 'middleware' => 'role:admin', 'prefix' => '/admin', 'as' => 'admin.', 'name' => 'admin' ], function () {
    Route::get('/users', 'index')->name('users');
    Route::get('/users/{user}/edit', 'edit')->name('users.edit');
    Route::get('/users/create', 'create')->name('users.create');
});

Route::group(['controller' => AdminSkateSpotController::class, 'middleware' => 'role:admin', 'prefix' => '/admin', 'as' => 'admin.', 'name' => 'admin' ], function () {
    Route::get('/skate-spots', 'index')->name('skate-spots');
    // Route::get('/users/{user}/edit', 'edit')->name('users.edit');
    Route::get('/skate-spots/create', 'create')->name('skate-spots.create');
});

require __DIR__ . '/auth.php';
