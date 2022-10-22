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

Route::get('/', function () {
    return view("mahasiswa");
});

/*tanpa harus di import(use)
Route :: get('/dosen', [App\Http\Controllers\DosenController::class, 'index']);
*/


//jika menggunakan use (import)
Route :: get('/dosen', [DosenController::class, 'index']);