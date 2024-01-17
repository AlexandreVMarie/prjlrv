<?php

use App\Http\Controllers\articolController;
use App\Http\Controllers\editorController;
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

Route::get('/articol', [articolController::class, 'index'])->name('articles.index');
Route::get('/create_Articol', [articolController::class, 'create']);
Route::post('/create_Articol', [articolController::class, 'store'])->name('articles.store');
Route::get('/edit_Articol', [articolController::class, 'edit'])->name('articles.edit');
Route::put('/articol/update/{id}', [ArticolController::class, 'update'])->name('articol.update');

Route::get('/LogOut', [articolController::class, 'LogOut']);
Route::get('/editor', [editorController::class, 'index']);
Route::get('/feedback_Articol', [editorController::class,'feedback']);