<?php

use App\Http\Controllers\AprendizController;
use App\Http\Controllers\CursoController;
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

//ruta para registrar un nuevo Instructor
Route::post('/instructor-ingresar',[InstructorController::class,'create'])->name('instructor.create');

//ruta para modificar un instructor
Route::post('/instructor-modificar',[InstructorController::class,'update'])->name('instructor.update');

//ruta para eliminar un instructor
Route::get('/instructor-eliminar-{id}', [InstructorController::class, 'delete'])->name('instructor.delete');


//Curso

//ruta para acceder al curso
Route::get('/curso',[CursoController::class, 'index'])->name('curso.index');

//ruta para registrar un nuevo curso
Route::post('/curso-ingresar',[CursoController::class,'create'])->name('curso.create');

//ruta para modificar un curso
Route::post('/curso-modificar',[CursoController::class,'update'])->name('curso.update');

//ruta para eliminar un curso
Route::get('/curso-eliminar-{id}',[CursoController::class, 'delete'])->name('curso.delete');

algo