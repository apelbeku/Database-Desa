<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\FamilyCardController;
use App\Http\Controllers\IndividualController;
use App\Http\Controllers\MaritalController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\ReligionController;
use App\Models\Relation;
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

// Route::resource('/perorangan', IndividualController::class)->names('perorangan');
Route::resource('/agama', ReligionController::class)->names('agama');
Route::get('/agama/show/trashed', [ReligionController::class, 'trashed'])->name('agama.trashed');
Route::get('/agama/restore/{id}', [ReligionController::class, 'restore'])->name('agama.restore');

Route::resource('/pekerjaan', ProfessionController::class)->names('pekerjaan');
Route::get('/pekerjaan/show/trashed', [ProfessionController::class, 'trashed'])->name('pekerjaan.trashed');
Route::get('/pekerjaan/show/restore/{id}', [ProfessionController::class, 'restore'])->name('pekerjaan.restore');

Route::resource('/pendidikan', EducationController::class)->names('pendidikan');
Route::get('/pendidikan/show/trashed', [EducationController::class, 'trashed'])->name('pendidikan.trashed');
Route::get('/pendidikan/show/restore/{id}', [EducationController::class, 'restore'])->name('pendidikan.restore');

Route::resource('/status-pernikahan', MaritalController::class)->names('pernikahan');
Route::get('/status-pernikahan/show/trashed', [MaritalController::class, 'trashed'])->name('pernikahan.trashed');
Route::get('/status-pernikahan/show/restore/{id}', [MaritalController::class, 'restore'])->name('pernikahan.restore');

Route::resource('/hubungan-keluarga', RelationController::class)->names('hubungan');
Route::get('/hubungan-keluarga/show/trashed', [RelationController::class, 'trashed'])->name('hubungan.trashed');
Route::get('hubungan-keluarga/show/restore/{id}', [RelationController::class, 'restore'])->name('hubungan.restore');

Route::resource('/kartu-keluarga', FamilyCardController::class)->names('kartukeluarga');
Route::get('Kartu-keluarga/show/trashed', [FamilyCardController::class, 'trashed'])->name('kartukeluarga.trashed');
Route::get('kartu-keluarga/show/restore/{id}', [FamilyCardController::class, 'restore'])->name('kartukeluarga.restore');

Route::resource('/perseorangan', IndividualController::class)->names('perseorangan');
Route::get('/perseorangan/create-anggota/{id}', [IndividualController::class, 'create'])->name('perseorangan-create-anggota');
Route::get('/perseorangan/show/trashed', [IndividualController::class, 'trashed'])->name('perseorangan.trashed');
Route::get('/perseorangan/show/restore/{id}', [IndividualController::class, 'restore'])->name('perseorangan.restore');
