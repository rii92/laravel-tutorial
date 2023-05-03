<?php

use App\Http\Controllers\about;
use App\Http\Controllers\welcome;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [welcome::class, 'index']);

Route::get('/about', [about::class, 'index']);

Route::get('/post', [PostController::class, 'index']);
