<?php

use App\Http\Controllers\AprendizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// ruta para acceder al aprendiz 
Route::get('/aprendiz',[AprendizController::class,'index'])->name('aprendiz.index');

//ruta para registrar un nuevo aprendiz
Route::post('/aprendiz-ingresar',[AprendizController::class,'create'])->name('aprendiz.create');

//ruta para modificar un aprendiz
Route::post('/aprendiz-modificar',[AprendizController::class,'update'])->name('aprendiz.update');

//ruta para eliminar un aprendiz
Route::get('/aprendiz-eliminar-{id}', [AprendizController::class, 'delete'])->name('aprendiz.delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ruta para el loging
