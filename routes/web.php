<?php

// use Illuminate\Support\Facades\App;

// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
Route::group(['middleware' => 'prevent-back-history'],function(){



Route::get('/login',        [RegisterController::class, 'loginView'])->name('auth.login')->middleware('AlreadyLoggedIn');
Route::get('/register',     [RegisterController::class, 'registerView'])->name('auth.register')->middleware('AlreadyLoggedIn');
Route::post('/add/save',    [RegisterController::class, 'addAccount']);
Route::get('/login/account',[RegisterController::class, 'loginAccount']);
Route::get('/home',         [RegisterController::class, 'home'])->middleware('isLogged');
Route::get('/logout',       [RegisterController::class, 'logoutAccount'])->middleware('isLogged');

}); //prevent-back-history middleware
