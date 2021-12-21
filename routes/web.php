<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\InstitucionalController;
use App\Http\Controllers\PruebaController;


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

Route::get('/', HomeController::class)->name('home');

Route::get('/carrera-programas-de-estudio', CarreraController::class)->name('programa');

Route::get('/cursos-idelp', CursosController::class)->name('cursos');

Route::get('inscripcion-idelp-2021', [InscripcionController::class, 'index'])->name('requisitos');
Route::get('inscripcion-idelp-2021/contacto', [InscripcionController::class, 'contacto'])->name('contacto');
Route::post('inscripcion-idelp-2021/contacto', [InscripcionController::class, 'store'])->name('contacto.store');
// Route::group(['prefix'=>'inscripcion-idelp-2021', 'as'=>'inscripcion'], function(){
//     Route::get('/', [InscripcionController::class, 'index']);
//     Route::get('/contacto', [InscripcionController::class, 'contacto']);
//     Route::post('/contacto', [InscripcionController::class, 'store']);
// });

//para probar el envío de correo
Route::get('inscripcion-idelp-2021/prueba', PruebaController::class)->name('prueba');

Route::get('/institucional', InstitucionalController::class)->name('institucional');


