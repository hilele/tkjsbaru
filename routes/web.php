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



Route::group(['prefix' => 'admin'], function()
{
	Route::group(['middleware' => ['web', 'auth', 'IsAdmin']], function () {
        Route::get('/', function(){ return redirect('admin/event');});
        Route::get('/event', 'EventController@index');
        Route::post('/event/store', 'EventController@store');
        Route::post('/event/update','EventController@update');
        Route::get('/event/detail/{id}', 'EventController@detail');
        Route::get('/event/detail', 'KegiatanController@index');
        Route::post('/kegiatan/store', 'KegiatanController@store');

	});
});

Route::group(['prefix' => 'superAdmin'], function()
{
    Route::group(['middleware' => ['web', 'auth', 'IsSuperAdmin']], function () {
        Route::get('/homeSA', 'Auth\RegisterController@showAdmin');
        // Route::get('/', function(){ return redirect('superAdmin/home');});
	});
});



Auth::routes();

