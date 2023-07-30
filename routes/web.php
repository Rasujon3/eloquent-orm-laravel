<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Orm;

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

Route::get('/', [Orm::class, 'Index']);
Route::post('/insert', [Orm::class, 'OnInsert']);
Route::get('/delete/{id}', [Orm::class, 'OnDelete']);
Route::get('/edit/{id}', [Orm::class, 'OnEdit']);
Route::post('/update/{id}', [Orm::class, 'OnUpdate']);
