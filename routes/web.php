<?php

use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('portafolio',[PortafolioController::class,'index'])->middleware('auth')->name('portafolio');
Route::get('portafolio/create',[PortafolioController::class,'create'])->name('create');
Route::post('portafolio',[PortafolioController::class,'store'])->name('store');
Route::get('portafolio/{id}',[PortafolioController::class,'show'])->name('showPortafolio');
Route::get('portafolio/edit/{id}',[PortafolioController::class,'edit'])->name('edit');
Route::put('portafolio/{portafolio}',[PortafolioController::class,'update'])->name('updateP');
Route::delete('portafolio/{portafolio}',[PortafolioController::class,'destroy'])->name('destroy');

//Rutas para pestaña Curso 
Route::get('curso', [CursoController::class,'index'])->middleware('auth')->name('curso');
Route::get('curso/create', [CursoController::class,'create'])->name('createCurso');
Route::post('curso', [CursoController::class,'store'])->name('storeCurso');
Route::get('curso/{id}', [CursoController::class,'show'])->name('show');
Route::get('curso/edit/{id}',[CursoController::class,'edit'])->name('editCurso');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('updateCurso');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('destroyCurso');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
