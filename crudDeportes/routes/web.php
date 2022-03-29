<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeporteController;

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

Route::get('deportes',[DeporteController::class,'index'])->name('deportes.index');
Route::get('deportes/create',[DeporteController::class,'create'])->name('deportes.create');
Route::post('deportes',[DeporteController::class,'store'])->name('deportes.store');
Route::get('deportes/{id}',[DeporteController::class,'show'])->name('deportes.show');
Route::get('deportes/{id}/edit',[DeporteController::class,'edit'])->name('deportes.edit');
Route::put('deportes/{id}',[DeporteController::class,'update'])->name('deportes.update');
Route::delete('deportes/{id}',[DeporteController::class,'destroy'])->name('deportes.destroy');
