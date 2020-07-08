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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/search', 'Frontend\SearchController@index')->name('e_search');

Route::group(['prefix'=> '/users'], function(){
	Route::get('/manage', 'Backend\UserController@index')->name('manageUsers');
	Route::get('/create', 'Backend\UserController@create')->name('createUsers');
	Route::post('/create', 'Backend\UserController@store')->name('storeUsers');

	Route::get('/edit/{id}', 'Backend\UserController@edit')->name('editUsers');
	Route::post('/edit/{id}', 'Backend\UserController@update')->name('updateUsers');
	Route::post('/delete/{id}', 'Backend\UserController@destroy')->name('deleteUsers');
	//Regulare User route
	Route::get('/editUsers/{id}', 'Backend\UserController@editRegularUser')->name('editRegularUsers');
	Route::post('/editUsers/{id}', 'Backend\UserController@updateRegularUser')->name('updateRegularUsers');
	Route::post('/deleteUsers/{id}', 'Backend\UserController@delete')->name('deleteRegularUsers');

	

});