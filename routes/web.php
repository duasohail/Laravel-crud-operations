<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\UsernewController;

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

Route::get('/',[UsernewController::class, 'getList']);

Route::get('users', [usercontroller::class, 'index']);
Route::get('usernew', [UsernewController::class, 'getData']);
Route::post('usernewsave', [UsernewController::class, 'store']);
Route::get('delete/{id}', [UsernewController::class, 'destroy']);
Route::get('edit/{id}', [UsernewController::class, 'editPage']);
Route::post('/edit', [UsernewController::class, 'update']);
