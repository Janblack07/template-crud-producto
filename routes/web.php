<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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


Route :: get('/',[ProductoController::class,'index'])->name('producto.ver');
Route :: get('/create',[ProductoController::class,'create'])->name('producto.create');
Route :: post('/',[ProductoController::class,'store'])->name('producto.store');
Route :: get('/edit/{id}',[ProductoController::class,'edit'])->name('producto.edit');
Route :: delete('/delete/{id}',[ProductoController::class,'destroy'])->name('producto.delete');
Route :: put('/update/{id}',[ProductoController::class,'update'])->name('producto.update');
Route :: get('/ordenar',[ProductoController::class,'ordenar'])->name('producto.ordenar');
Route :: post('/buscar',[ProductoController::class,'buscar'])->name('producto.search');
