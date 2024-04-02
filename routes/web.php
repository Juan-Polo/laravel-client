<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\ImageController;
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


Route::get('/', function () {
    dd("hola");
});

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




Route::post('/asignaturas', [AsignaturaController::class, 'store'])->name('asignaturas.store');
Route::get('/asignaturas/{idAsignatura}', [AsignaturaController::class, 'show'])->name('asignaturas.show');

Route::get('/asignaturas/{idAsignatura}/guias', [AsignaturaController::class, 'guias'])->name('asignaturas.guias');






// Route::post('/degrees/update', [DegreeController::class, 'update'])->name('degrees.update');
// Route::get('/degrees/delete/{id}', [DegreeController::class, 'destroy'])->name('degrees.destroy');



Route::post('/activities', [ActivityController::class, 'store'])->name('activities.store');
Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');


Route::get('/activities/{id}', [ActivityController::class, 'show'])->name('activities.show');
Route::post('/activities/update', [ActivityController::class, 'update'])->name('activities.update');
Route::get('/activities/delete/{id}', [ActivityController::class, 'destroy'])->name('activities.destroy');












Route::get('/images', [ImageController::class, 'index'])->name('images.index');
Route::get('/images/create', [ImageController::class, 'create']);
Route::post('/images', [ImageController::class, 'store'])->name('images.store');
Route::get('/images/{idImage}', [ImageController::class, 'show'])->name('images.show');




Route::get('/images/{id}/edit', [ImageController::class, 'edit'])->name('images.edit');





Route::get('/images/delete/{id}', [ImageController::class, 'destroy'])->name('images.destroy');
