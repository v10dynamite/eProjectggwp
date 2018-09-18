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



Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
	Route::get('/usersForm', [
		'as' => 'usersForm',
		'uses' => 'InputController@usersForm'
	]);

	Route::get('/usersList', [
		'as' => 'usersList',
		'uses' => 'ListController@usersList'
	]);

	Route::get('/productsForm', [
		'as' => 'productsForm',
		'uses' => 'InputController@productsForm'
	]);

	Route::get('/productsList', [
		'as' => 'productsList',
		'uses' => 'ListController@productsList'
	]);

	Route::post('/register', [
		'as' => 'register',
		'uses' => 'Auth\RegisterController@create'
	]);
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
