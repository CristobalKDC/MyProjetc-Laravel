<?php

use Illuminate\Support\Facades\Route;
// use App\Https\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
//use App\Http\Controllers\UserController;

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
Route::get('/', function () {
    return view('welcome');
});



Route::get('/list', function () {
    return view('list', ['name' => 'Cristóbal']);
});


    // Route::get('/register', 'RegisterController@show')->name('register.show');
    // Route::post('/register', 'RegisterController@register')->name('register.perform');
    Route::get('/register', [RegisterController::class, 'show']);
    Route::post('/register', [RegisterController::class, 'register']);
    
    // Route::post('/register', 'UserController@guardar')->name('guardar.perform');

    Route::get('/login', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'logear']);
    Route::post('/logout', [LoginController::class, 'logout']);


// Route::get('/register', [UserController::class, 'create']);


