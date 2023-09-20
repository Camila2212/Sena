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
