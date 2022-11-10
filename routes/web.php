<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
  Route::get('/jurusan', [App\Http\Controllers\MajorController::class, 'index'])->name('jurusan');



  Route::get('/dosen', [App\Http\Controllers\DosenController::class, 'index'])->name('dosen');
  Route::post('/dosen', [App\Http\Controllers\DosenController::class, 'create'])->name('dosen-create');
  Route::delete('/dosen/{dosen}', [App\Http\Controllers\DosenController::class, 'destroy'])->name('dosen-delete');
  Route::get('dosen/{dosen}', [App\Http\Controllers\DosenController::class, 'show'])->name('dosen-edit');
  Route::put('dosen/{id}/update', [App\Http\Controllers\DosenController::class, 'update'])->name('dosen-update');
});
