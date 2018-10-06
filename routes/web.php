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
    return view('adminlte::homefrontend');
})->name('/');

Route::get('/thoitrangcongso', [
	'as' => 'thoitrangcongso',
	'uses' => 'ProductController@thoitrangcongsoall'
]);

Route::get('/thoitrangtre', [
	'as' => 'thoitrangtre',
	'uses' => 'ProductController@thoitrangtreall'
]);

Route::get('/mevabe', [
	'as' => 'mevabe',
	'uses' => 'ProductController@mevabeall'
]);

//Send email route
Route::post('/sendemail', 'SendEmailController@send');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    
	Route::resource('user', 'UserController');
	Route::resource('product', 'ProductController');
	Route::resource('category', 'CategoryController');

	Route::get('/ajaxdata', [
		'as' => 'ajaxdata',
		'uses' => 'AjaxdataController@index'
	]);

	Route::get('/ajaxdata/getdata', [
		'as' => 'ajaxdata.getdata',
		'uses' => 'AjaxdataController@getdata'
	]);

	Route::post('/ajaxdata/postdata', [
		'as' => 'ajaxdata.postdata',
		'uses' => 'AjaxdataController@postdata'
	]);
});
