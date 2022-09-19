<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MappingController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\RetentionController;
use App\Http\Controllers\ArchivesVitalController;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\ArchivesStaticController;
use App\Http\Controllers\ArchivesInactiveController;

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
Route::resource('mapping', MappingController::class);
// Data
Route::resource('archives-static', ArchivesStaticController::class);
Route::get('archives-static/download/{id}', [ArchivesStaticController::class, 'download'])->name('archives-static.download');
Route::resource('archives-inactive', ArchivesInactiveController::class);
Route::get('archives-inactive/download/{id}', [ArchivesInactiveController::class, 'download'])->name('archives-inactive.download');
Route::resource('archives-vital', ArchivesVitalController::class);
Route::get('archives-vital/download/{id}', [ArchivesVitalController::class, 'download'])->name('archives-vital.download');
// User Config
Route::resource('user', UserController::class);