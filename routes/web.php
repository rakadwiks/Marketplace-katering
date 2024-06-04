<?php

use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [(HomeController::class, 'index']->name('home'));
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/belanja', [BelanjaController::class, 'index'])->name('belanja');

Route::middleware(['auth', 'verified'])->group(function () {

    // register-success
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register/verify', 'verify')->name('register-verify');
    });
});

Route::prefix('admin')
    ->group(function () {
        Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('product', ProductController::class);
    });
Auth::routes(['verify' => true]);
