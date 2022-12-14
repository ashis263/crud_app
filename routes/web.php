<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/display', [IndexController::class, 'display']);
Route::post('/submit', [IndexController::class, 'submit']);

Route::get('/update/{id}', [IndexController::class, 'update']);
Route::post('/new', [IndexController::class, 'new']);

Route::get('/delete/{id}', [IndexController::class, 'delete']);