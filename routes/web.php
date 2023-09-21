<?php

use App\Http\Controllers\AprendizController;
use App\Http\Controllers\InstructorController;
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


//Instructor

// ruta para acceder al Instructor 
Route::get('/instructor',[InstructorController::class,'index'])->name('instructor.index');

//ruta para registrar un nuevo aprendiz
Route::post('/instructor-ingresar',[InstructorController::class,'create'])->name('instructor.create');

//ruta para modificar un aprendiz
Route::post('/instructor-modificar',[InstructorController::class,'update'])->name('instructor.update');

//ruta para eliminar un aprendiz
Route::get('/instructor-eliminar-{id}', [AprendizController::class, 'delete'])->name('instructor.delete');