<?php

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
    return view('welcome');
});


Route::get('fgh', function () {
    return 'Hi sir yusuf';
})->middleware('auth');
Route::get('login', function () {
    return 'Must be admin  sir yusuf';
})->name('login');


Route::get('show','testController@test1')->middleware('auth');
Route::get('show2','testController@test2');
Route::get('second1','Front\FiristController@showString1');
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


