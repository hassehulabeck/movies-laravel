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

Route::get('/actors/oldies', 'ActorController@oldActors');

Route::resource('/movies', 'MovieController');
Route::resource('/actors', 'ActorController')->middleware('logentry');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bear', 'BearController@index');
Route::get('/award', 'AwardController@index');
