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

Route::get('login','UserController@login');
Route::post('register','UserController@register');
Route::post('authenticate','UserController@authenticate');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::group(['middleware' => 'auth'], function(){

    Route::get('dashboard','UserController@dashboard');
    Route::get('receipt','UserController@receipt')->name('receipt');
    Route::get('PDFreceipt','UserController@PDFreceipt');
    Route::get('logout','UserController@logout');
    Route::get('edit-data','UserController@edit');
    Route::post('update-data','UserController@update');
    Route::get('change-password','UserController@editPassword');
    Route::post('update-password','UserController@updatePassword');
    Route::get('download-document','UserController@document');
    Route::get('aplicant-list','UserController@aplicant');

    Route::post('load1','DocumentController@load1');
    Route::post('load2','DocumentController@load2');
    Route::post('load3','DocumentController@load3');
    Route::post('load4','DocumentController@load4');
    Route::post('load5','DocumentController@load5');
    Route::post('load6','DocumentController@load6');
    Route::post('load7','DocumentController@load7');

    Route::get('admin','UserController@admin');

    Route::get('data/{dni}','UserController@aplicantdata');

});
