<?php

// use Illuminate\Support\Facades\App;

// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login',        [App\Http\Controllers\RegisterController::class, 'loginView']);
Route::get('/register',     [App\Http\Controllers\RegisterController::class, 'registerView'])->name('auth.register');
Route::post('add/save',     [App\Http\Controllers\RegisterController::class, 'addAccount']);
Route::get('/login/account',[\App\Http\Controllers\RegisterController::class, 'loginAccount']);
Route::get('/home',         [App\Http\Controllers\RegisterController::class, 'home']);

