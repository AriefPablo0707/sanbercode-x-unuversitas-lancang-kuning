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
//  default route
Route::get('/', [HomeController::class,'index']);

Route::get('/daftar', [AuthController::class, 'daftar']);

Route::post('/home', [AuthController::class, 'home']);

Route::get('/data-table', function() {
    return view('page.data-table');
});

Route::get('/table', function() {
    return view('page.table');
});