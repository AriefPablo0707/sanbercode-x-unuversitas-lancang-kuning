<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('/register', [AuthController::class, 'form']);

Route::post('/welcome', [AuthController::class, 'store']);

Route::get('/data-tables', function() {
    return view('pages.data-tables');
} );

Route::get('/table', function() {
    return view('pages.table');
} );