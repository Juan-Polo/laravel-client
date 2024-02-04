<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\DegreeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;



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
//     dd("hola");
// });

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('/users/{idUser}', [UsersController::class, 'show'])->name('users.show');
Route::post('/users/update', [UsersController::class, 'update'])->name('users.update');
Route::get('/users/delete/{id}', [UsersController::class, 'destroy'])->name('users.destroy');


Route::get('/degrees', [DegreeController::class, 'index'])->name('degrees.index');
Route::get('/degrees/create', [DegreeController::class, 'create']);
Route::post('/degrees', [DegreeController::class, 'store'])->name('degrees.store');
Route::get('/degrees/{idDegree}', [DegreeController::class, 'show'])->name('degrees.show');
Route::post('/degrees/update', [DegreeController::class, 'update'])->name('degrees.update');
Route::get('/degrees/delete/{id}', [DegreeController::class, 'destroy'])->name('degrees.destroy');
