<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\RetentionController;
use App\Http\Controllers\ClassificationController;

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
Route::resource('classification', ClassificationController::class);
Route::post('classification-get-secondary', [ClassificationController::class, 'get_secondary'])->name('classification-get-secondary');
Route::post('classification-get-tertiary', [ClassificationController::class, 'get_tertiary'])->name('classification-get-tertiary');
Route::resource('security', SecurityController::class);
Route::resource('retention', RetentionController::class);
// Data
Route::resource('archives', ArchivesController::class);
// User Config
Route::resource('user', UserController::class);