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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'cabinet', 'namespace' => 'Cabinet'], function() {
    Route::get('/', ['as' => 'cabinet.rigs', 'uses' => 'RigController@rigs']);
    Route::get('chart/{id}/{field}', ['as' => 'cabinet.chart', 'uses' => 'ChartController@index']);
    Route::get('chart/dataset/{id}/{field}', ['as' => 'cabinet.chart.dataset', 'uses' => 'ChartController@dataset']);
    Route::delete('rig/destroy/{id}', ['as' => 'cabinet.rigs.destroy', 'uses' => 'RigController@destroy']);
});
