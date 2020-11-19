<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcomepage');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/addStationary', function () {
    return view('addStationary');
});


Route::get('/login', 'UserController@getLogin');
Route::post('/login', 'UserController@validates');

Route::get('/register', 'UserController@getRegister');
Route::post('/register', 'UserController@store');

Route::get('/logout', 'UserController@logout');

Route::get('/addStationary', 'ProductController@getProduct');
Route::post('/addStationary', 'ProductController@storeProduct')->name('addStationary');