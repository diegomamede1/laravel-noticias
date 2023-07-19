<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriasNoticiasController;
use App\Http\Controllers\Admin\NoticiasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');




Route::group(['prefix' => '/admin', "middleware" => ['auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


    Route::group(['prefix' => '/categorias_noticias'], function () {
        Route::get('/index', [CategoriasNoticiasController::class, 'index'])->name('admin.categorias.noticias.index');
        Route::get('/create', [CategoriasNoticiasController::class, 'create'])->name('admin.categorias.noticias.create');
        Route::post('/store', [CategoriasNoticiasController::class, 'store'])->name('admin.categorias.noticias.store');
        Route::get('/edit/{id}', [CategoriasNoticiasController::class, 'edit'])->name('admin.categorias.noticias.edit');
        Route::post('/update{id}', [CategoriasNoticiasController::class, 'update'])->name('admin.categorias.noticias.update');
        Route::get('/destroy/{id}', [CategoriasNoticiasController::class, 'destroy'])->name('admin.categorias.noticias.destroy');
    });

    Route::group(['prefix' => '/noticias'], function () {
        Route::get('/index', [NoticiasController::class, 'index'])->name('admin.noticias.index');
        Route::get('/create', [NoticiasController::class, 'create'])->name('admin.noticias.create');
        Route::post('/store', [NoticiasController::class, 'store'])->name('admin.noticias.store');
        Route::get('/edit/{id}', [NoticiasController::class, 'edit'])->name('admin.noticias.edit');
        Route::post('/update{id}', [NoticiasController::class, 'update'])->name('admin.noticias.update');
        Route::get('/destroy/{id}', [NoticiasController::class, 'destroy'])->name('admin.noticias.destroy');
    });
});


Route::get('/', [HomeController::class, 'index'])->name('site.home.index');
Route::get('/blog', [BlogController::class, 'index'])->name('site.blog.index');
Route::get('/blog/{Noticia}', [BlogController::class, 'show'])->name('site.blog.show');


require __DIR__ . '/auth.php';
