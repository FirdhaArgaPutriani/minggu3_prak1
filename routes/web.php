<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;

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
Route::get('/home', [HomeController::class,'home']);

Route::prefix('/prodi')->group(function () { 
    Route::get('/mi',[ProdiController::class,'mi']); 
    Route::get('/ti',   [ProdiController::class,'ti']);
});

Route::get('/news/{hal}',   [NewsController::class,'news']);

Route::prefix('/sarana')->group(function () { 
    Route::get('/kantor',   [SaranaController::class,'kantor']); 
    Route::get('/lab',      [SaranaController::class,'lab']);
    Route::get('/kelas',    [SaranaController::class,'kelas']);
    Route::get('/kantin',   [SaranaController::class,'kantin']);
});

Route::get('/about',    [AboutController::class,'about']);

Route::get('/comment/{nm}/{psn}',   [CommentController::class,'comment']);
