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

//Route THOI TRANG CONG SO

Route::group(['prefix' => '/thoitrangcongso'], function() {
	//All thoitrangcongso products
	Route::get('/', [
		'as' => 'thoitrangcongso',
		'uses' => 'ProductController@thoitrangcongsoall'
	]);

	//thoitrangcongso - damnu products
	Route::get('/damnu', [
		'as' => 'thoitrangcongsodamnu',
		'uses' => 'ProductController@thoitrangcongsodamnu'
	]);

	//thoitrangcongso - aonu products
	Route::get('/aonu', [
		'as' => 'thoitrangcongsoaonu',
		'uses' => 'ProductController@thoitrangcongsoaonu'
	]);

	//thoitrangcongso - quannu products
	Route::get('/quannu', [
		'as' => 'thoitrangcongsoquannu',
		'uses' => 'ProductController@thoitrangcongsoquannu'
	]);

	//thoitrangcongso - chanvay products
	Route::get('/chanvay', [
		'as' => 'thoitrangcongsochanvay',
		'uses' => 'ProductController@thoitrangcongsochanvay'
	]);

	//thoitrangcongso - bolien products
	Route::get('/bolien', [
		'as' => 'thoitrangcongsobolien',
		'uses' => 'ProductController@thoitrangcongsobolien'
	]);

});
//END Route THOI TRANG CONG SO


//Route THOI TRANG TRE
Route::group(['prefix' => '/thoitrangtre'], function() {
	//All thoitrangtre products
	Route::get('/', [
		'as' => 'thoitrangtre',
		'uses' => 'ProductController@thoitrangtreall'
	]);

	//thoitrangtre - damnu products
	Route::get('/damnu', [
		'as' => 'thoitrangtredamnu',
		'uses' => 'ProductController@thoitrangtredamnu'
	]);

	//thoitrangtre - aonu products
	Route::get('/aonu', [
		'as' => 'thoitrangtreaonu',
		'uses' => 'ProductController@thoitrangtreaonu'
	]);

	//thoitrangtre - quannu products
	Route::get('/quannu', [
		'as' => 'thoitrangtrequannu',
		'uses' => 'ProductController@thoitrangtrequannu'
	]);

	//thoitrangtre - chanvay products
	Route::get('/chanvay', [
		'as' => 'thoitrangtrechanvay',
		'uses' => 'ProductController@thoitrangtrechanvay'
	]);

	//thoitrangtre - bolien products
	Route::get('/bolien', [
		'as' => 'thoitrangtrebolien',
		'uses' => 'ProductController@thoitrangtrebolien'
	]);

});
//END Route THOI TRANG TRE


//Route ME VA BE
Route::group(['prefix' => '/mevabe'], function() {
	//All mevabe products
	Route::get('/', [
		'as' => 'mevabe',
		'uses' => 'ProductController@mevabeall'
	]);

	//mevabe - me products
	Route::get('/me', [
		'as' => 'mevabeme',
		'uses' => 'ProductController@mevabeme'
	]);

	//mevabe - be products
	Route::get('/be', [
		'as' => 'mevabebe',
		'uses' => 'ProductController@mevabebe'
	]);

});
//END Route ME VA BE


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
