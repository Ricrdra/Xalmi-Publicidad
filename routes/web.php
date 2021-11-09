<?php

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

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::Resource('/usuarios', UserController::class);
Route::Resource('/productos', ProductController::class);
Route::Resource('/categorias', CategoryController::class);
Route::Resource('/subcategorias', SubcategoryController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
