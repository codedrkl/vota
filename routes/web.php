<?php

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


Route::group(['prefix' => 'users'], function() {
    Route::get('/', function() {
        return 'Hi';
    });

    Route::post('/signup', function() {
       return 'Hi';
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/election', 'ElectionController@index');

Route::post('/election', 'ElectionController@store');

Route::get('/candidate', 'CandidateController@index');

Route::post('/candidate', 'CandidateController@store');
