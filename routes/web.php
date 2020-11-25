<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\FamilyCardController;
use App\Http\Controllers\IndividualController;
use App\Http\Controllers\MaritalController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\ReligionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', DashboardController::class)->names('dasboard');

Route::resource('/perorangan', IndividualController::class)->names('perorangan');
Route::resource('/agama', ReligionController::class)->names('agama');
Route::get('/agama/show/trashed', [ReligionController::class, 'trashed'])->name('trashed');
Route::post('/agama/restore', [ReligionController::class, 'restore'])->name('agama.restore');
Route::resource('/pekerjaan', ProfessionController::class)->names('pekerjaan');
Route::resource('/pendidikan', EducationController::class)->names('pendidikan');
Route::resource('/status-pernikahan', MaritalController::class)->names('pernikahan');
Route::resource('/hubungan-keluarga', RelationController::class)->names('hubungan');
Route::resource('/perseorangan', IndividualController::class)->names('perseorangan');
Route::resource('/kartu-keluarga', FamilyCardController::class)->names('kartukeluarga');
