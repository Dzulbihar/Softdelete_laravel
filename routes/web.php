<?php

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

Route::get('/', [App\Http\Controllers\GuruController::class, 'index']);

Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::get('/guru/hapus/{id}', [App\Http\Controllers\GuruController::class, 'hapus']);
Route::get('/guru/trash', [App\Http\Controllers\GuruController::class, 'trash']);
Route::get('/guru/kembalikan/{id}', [App\Http\Controllers\GuruController::class, 'kembalikan']);
Route::get('/guru/kembalikan_semua', [App\Http\Controllers\GuruController::class, 'kembalikan_semua']);
Route::get('/guru/hapus_permanen/{id}', [App\Http\Controllers\GuruController::class, 'hapus_permanen']);
Route::get('/guru/hapus_permanen_semua', [App\Http\Controllers\GuruController::class, 'hapus_permanen_semua']);











