<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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


Route::get('login',[LoginController::class,'create'])->name('login');
Route::post('login',[LoginController::class,'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');


 Route::middleware('auth')->group(function () {
  
  Route::get('/', [HomeController::class, 'index']);
  Route::get('/users', [HomeController::class, 'users']);
  Route::get('/users/create', [HomeController::class, 'create']);
  Route::post('/users', [HomeController::class, 'store']);
  Route::get('/about', [HomeController::class, 'about']);
  Route::get('/settings', [HomeController::class, 'settings']);

 });
