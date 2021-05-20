<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InicioController;
Use App\Http\Controllers\Admin\HomeController;

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

/*  Route::get('/', function () {
    return view('welcome');
}); */

//pantalla al ingresar a la web
Route::get('/',[App\Http\Controllers\InicioController::class, 'index'])->name('index');

Auth::routes();

//Ingreso al panel administrativo
Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');

Route::get('/admin/empresary',[App\Http\Controllers\Admin\EmpresaryController::class, 'index'])->name('admin.empresary.index');

//Sucursal
Route::get('/admin/office',[App\Http\Controllers\Admin\OfficeController::class, 'index'])->name('admin.office.index');
Route::post('/admin/office/store',[App\Http\Controllers\Admin\OfficeController::class, 'store'])->name('admin.office.store');
Route::post('/admin/office/{officeId}/update',[App\Http\Controllers\Admin\OfficeController::class, 'update'])->name('admin.office.update');
Route::delete('/admin/office/{officeId}/delete',[App\Http\Controllers\Admin\OfficeController::class, 'delete'])->name('admin.office.delete');

//Rubros
Route::get('/admin/category',[App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
Route::post('/admin/category/store',[App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
Route::post('/admin/category/{categoryId}//update',[App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
Route::delete('/admin/category/{categoryId}/delete',[App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('admin.category.delete');
Route::get('/admin/category/{officeId}/catxoffi',[App\Http\Controllers\Admin\CategoryController::class, 'catxoffi'])->name('admin.category.catxoffi');
