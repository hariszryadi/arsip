<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrimaryClassificationController;
use App\Http\Controllers\SecondaryClassificationController;
use App\Http\Controllers\TertiaryClassificationController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
// Master
Route::resource('primary-classification', PrimaryClassificationController::class);
Route::resource('secondary-classification', SecondaryClassificationController::class);
Route::resource('tertiary-classification', TertiaryClassificationController::class);
Route::post('tertiary-classification-get-secondary', [TertiaryClassificationController::class, 'get_secondary'])->name('tertiary-classification-get-secondary');

// User Config
Route::resource('user', UserController::class);