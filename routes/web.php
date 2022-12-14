<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\MappingController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\RetentionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArchivesVitalController;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\ArchivesStaticController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ArchiveCreatorController;
use App\Http\Controllers\ArchivesDestroyController;
use App\Http\Controllers\ArchivesInactiveController;
use App\Http\Controllers\ArchivesOverController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function() {
    return view('welcome');
});
/** GUEST */
Route::get('guest/register', [GuestController::class, 'register'])->name('guest.register');
Route::post('guest/store', [GuestController::class, 'store'])->name('guest.store');
Route::get('guest/archive/{token}', [GuestController::class, 'archive'])->name('guest.archive')->middleware('guest.register');
Route::get('guest/logout/{token}', [GuestController::class, 'logout'])->name('guest.logout')->middleware('guest.register');
Route::get('guest/archive-static', [GuestController::class, 'get_static'])->name('guest.archive.static')->middleware('guest.register');
Route::get('guest/archive-inactive', [GuestController::class, 'get_inactive'])->name('guest.archive.inactive')->middleware('guest.register');
Route::get('guest/generate-pdf/{id}', [GuestController::class, 'generate_pdf'])->name('guest.generate-pdf')->middleware('guest.register');

/** ADMIN */
Route::get('dashboard', [DashboardController::class, 'index'])->name('home');
// Master
Route::resource('classification', ClassificationController::class);
Route::post('classification-get-secondary', [ClassificationController::class, 'get_secondary'])->name('classification-get-secondary');
Route::post('classification-get-tertiary', [ClassificationController::class, 'get_tertiary'])->name('classification-get-tertiary');
Route::get('classification/secondary/create', [ClassificationController::class, 'create_secondary'])->name('classification-secondary.create');
Route::post('classification/secondary/store', [ClassificationController::class, 'store_secondary'])->name('classification-secondary.store');
Route::get('classification/secondary/{id}/edit', [ClassificationController::class, 'edit_secondary'])->name('classification.secondary.edit');
Route::put('classification/secondary/{id}/update', [ClassificationController::class, 'update_secondary'])->name('classification.secondary.update');
Route::delete('classification/secondary/{id}', [ClassificationController::class, 'destroy_secondary'])->name('classification-secondary.destroy');
Route::get('classification/tertiary/create', [ClassificationController::class, 'create_tertiary'])->name('classification-tertiary.create');
Route::post('classification/tertiary/store', [ClassificationController::class, 'store_tertiary'])->name('classification-tertiary.store');
Route::get('classification/tertiary/{id}/edit', [ClassificationController::class, 'edit_tertiary'])->name('classification.tertiary.edit');
Route::put('classification/tertiary/{id}/update', [ClassificationController::class, 'update_tertiary'])->name('classification.tertiary.update');
Route::delete('classification/tertiary/{id}', [ClassificationController::class, 'destroy_tertiary'])->name('classification-tertiary.destroy');
Route::resource('security', SecurityController::class);
Route::resource('retention', RetentionController::class);
Route::resource('mapping', MappingController::class);
Route::resource('archive-creator', ArchiveCreatorController::class);
Route::resource('rack', RackController::class);
// Data
Route::resource('archives-static', ArchivesStaticController::class);
Route::get('archives-static/download/{id}', [ArchivesStaticController::class, 'download'])->name('archives-static.download');
Route::post('archives-static/import', [ArchivesStaticController::class, 'import'])->name('archives-static.import');
Route::get('download-template-archive-static', [ArchivesStaticController::class, 'download_template'])->name('download-template-archive-static');
Route::post('get-rack-archive-static', [ArchivesStaticController::class, 'get_rack'])->name('get-rack-archive-static');
Route::resource('archives-inactive', ArchivesInactiveController::class);
Route::get('archives-inactive/download/{id}', [ArchivesInactiveController::class, 'download'])->name('archives-inactive.download');
Route::post('archives-inactive/import', [ArchivesInactiveController::class, 'import'])->name('archives-inactive.import');
Route::get('download-template-archive-inactive', [ArchivesInactiveController::class, 'download_template'])->name('download-template-archive-inactive');
Route::post('get-rack-archive-inactive', [ArchivesInactiveController::class, 'get_rack'])->name('get-rack-archive-inactive');
Route::resource('archives-vital', ArchivesVitalController::class);
Route::get('archives-vital/download/{id}', [ArchivesVitalController::class, 'download'])->name('archives-vital.download');
Route::post('archives-vital/import', [ArchivesVitalController::class, 'import'])->name('archives-vital.import');
Route::get('download-template-archive-vital', [ArchivesVitalController::class, 'download_template'])->name('download-template-archive-vital');
Route::post('get-rack-archive-vital', [ArchivesVitalController::class, 'get_rack'])->name('get-rack-archive-vital');
Route::resource('archives-destroy', ArchivesDestroyController::class);
Route::delete('destroy_all', [ArchivesDestroyController::class, 'destroy_all'])->name('archives-destroy.destroy_all');
Route::resource('archives-over', ArchivesOverController::class);
// Report
Route::get('report-archive-vital', [ReportController::class, 'report_archive_vital'])->name('report-archive-vital');
Route::get('report-archive-static', [ReportController::class, 'report_archive_static'])->name('report-archive-static');
Route::get('report-archive-inactive', [ReportController::class, 'report_archive_inactive'])->name('report-archive-inactive');
Route::get('report-guest', [ReportController::class, 'report_guest'])->name('report-guest');
// User Config
Route::resource('role', RoleController::class);
Route::resource('user', UserController::class);
// Change Pasword
Route::get('change-password', [ChangePasswordController::class, 'edit'])->name('change-password.edit');
Route::put('change-password/{id}', [ChangePasswordController::class, 'update'])->name('change-password.update');
// Banner
Route::resource('banner', BannerController::class);
Route::post('banner/update-status', [BannerController::class, 'update_status'])->name('banner.update-status');
// Profile
Route::resource('profile', ProfileController::class);