<?php

use App\Http\Controllers\CategoriasNoticiasController;
use App\Http\Controllers\NoticiasController;
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


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => '/categorias_noticias'], function () {
    Route::get('/index', [CategoriasNoticiasController::class, 'index'])->name('categorias.noticias.index');
    Route::get('/create', [CategoriasNoticiasController::class, 'create'])->name('categorias.noticias.create');
    Route::post('/store', [CategoriasNoticiasController::class, 'store'])->name('categorias.noticias.store');
    Route::get('/edit/{id}', [CategoriasNoticiasController::class, 'edit'])->name('categorias.noticias.edit');
    Route::post('/update{id}', [CategoriasNoticiasController::class, 'update'])->name('categorias.noticias.update');
    Route::get('/destroy/{id}', [CategoriasNoticiasController::class, 'destroy'])->name('categorias.noticias.destroy');
});

Route::group(['prefix' => '/noticias'], function () {
    Route::get('/index', [NoticiasController::class, 'index'])->name('noticias.index');
    Route::get('/create', [NoticiasController::class, 'create'])->name('noticias.create');
    Route::post('/store', [NoticiasController::class, 'store'])->name('noticias.store');
    Route::get('/edit/{id}', [NoticiasController::class, 'edit'])->name('noticias.edit');
    Route::post('/update{id}', [NoticiasController::class, 'update'])->name('noticias.update');
    Route::get('/destroy/{id}', [NoticiasController::class, 'destroy'])->name('noticias.destroy');
});


