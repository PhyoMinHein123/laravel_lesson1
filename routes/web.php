<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HiController;
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


Route::get('/admin', function () {return view('welcome');});

Route::get('/hi', function () {return "hello Hi";});

Route::get('/hello', [HiController::class, 'hi']);

Route::get('/hellocontroller', [HiController::class, 'hello']);

Route::get('/view', [HiController::class, 'view']);