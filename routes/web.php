<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentationsController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\RpdplansController;
use App\Http\Controllers\RpdrealsController;

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
//realisasi
Route::get('/data', [RpdrealsController::class, 'index'])->name('data_index');
Route::get('/realisasi/{rpdreal}/edit', [RpdrealsController::class, 'edit'])->name('data_edit');
Route::get('/data/{rpdreal}/detail', [RpdrealsController::class, 'show'])->name('data_show');
Route::put('/data/{rpdreal}', [RpdrealsController::class, 'update'])->name('data_update');
Route::delete('/data/{rpdreal}', [RpdrealsController::class, 'destroy'])->name('data_delete');
Route::get('/data/create', [RpdrealsController::class, 'create'])->name('data_create');
Route::post('/data', [RpdrealsController::class, 'store'])->name('data_store');

//perencanaan
Route::get('/dataplan/create', [RpdplansController::class, 'create'])->name('plan_create');
Route::post('/dataplan', [RpdplansController::class, 'store'])->name('plan_store');
Route::get('/perencanaan/{rpdplan}/edit', [RpdplansController::class, 'edit'])->name('plan_edit');
Route::put('/data/{rpdplan}', [RpdplansController::class, 'update'])->name('plan_update');
Route::delete('/data/{rpdplan}', [RpdplansController::class, 'destroy'])->name('plan_delete');

//dokumentasi
Route::get('/documentationjanuari/{documentation}/{januari}', [DocumentationsController::class, 'showjanuari']);
Route::get('/documentationfebuari/{documentation}/{febuari}', [DocumentationsController::class, 'showfebuari']);
Route::get('/documentationmaret/{documentation}/{maret}', [DocumentationsController::class, 'showmaret']);
Route::get('/documentationapril/{documentation}/{april}', [DocumentationsController::class, 'showarpl']);
Route::get('/documentationmei/{documentation}/{mei}', [DocumentationsController::class, 'showmei']);
Route::get('/documentationjuni/{documentation}/{juni}', [DocumentationsController::class, 'showjuni']);
Route::get('/documentationjuli/{documentation}/{juli}', [DocumentationsController::class, 'showjuli']);
Route::get('/documentationagustus/{documentation}/{agustus}', [DocumentationsController::class, 'showagustus']);
Route::get('/documentationseptember/{documentation}/{september}', [DocumentationsController::class, 'showseptember']);
Route::get('/documentationoktober/{documentation}/{oktober}', [DocumentationsController::class, 'showoktober']);
Route::get('/documentationnovember/{documentation}/{november}', [DocumentationsController::class, 'shownovember']);
Route::get('/documentationdesember/{documentation}/{desember}', [DocumentationsController::class, 'showdesember']);

//kegiatan
Route::get('/kegiatan', [JobsController::class, 'index'])->name('job');
Route::get('/kegiatan/create', [JobsController::class, 'create'])->name('job_tambah');
Route::post('/kegiatan', [JobsController::class, 'store'])->name('job_simpan');
Route::get('/kegiatan/{job}/edit', [JobsController::class, 'edit'])->name('job_edit');
Route::put('/kegiatan/{job}', [JobsController::class, 'update'])->name('job_update');
Route::delete('/kegiatan/{job}', [JobsController::class, 'destroy'])->name('job_delete');

//pegawai
