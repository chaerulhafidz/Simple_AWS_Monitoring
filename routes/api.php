<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/arah_angin', array('middleware' => 'cors', 'uses' => 'API\AWSController@arah_angin'));
Route::get('/suhu', array('middleware' => 'cors', 'uses' => 'API\AWSController@suhu'));
Route::get('/kelembaban', array('middleware' => 'cors', 'uses' => 'API\AWSController@kelembaban'));
Route::get('/tekanan_udara', array('middleware' => 'cors', 'uses' => 'API\AWSController@tekanan_udara'));
Route::get('/intensitas_cahaya', array('middleware' => 'cors', 'uses' => 'API\AWSController@intensitas_cahaya'));
Route::get('/kualitas_udara', array('middleware' => 'cors', 'uses' => 'API\AWSController@kualitas_udara'));
Route::get('/ketinggian', array('middleware' => 'cors', 'uses' => 'API\AWSController@ketinggian'));
Route::get('/kondisi_cuaca', array('middleware' => 'cors', 'uses' => 'API\AWSController@kondisi_cuaca'));

//Route::get('/arah_angin', 'API\AWSController@arah_angin');
//Route::get('/suhu', 'API\AWSController@suhu');
//Route::get('/kelembaban', 'API\AWSController@kelembaban');
//Route::get('/tekanan_udara', 'API\AWSController@tekanan_udara');
//Route::get('/intensitas_cahaya', 'API\AWSController@intensitas_cahaya');
//Route::get('/kualitas_udara', 'API\AWSController@kualitas_udara');
//Route::get('/kondisi_cuaca', 'API\AWSController@kondisi_cuaca');
//Route::get('/ketinggian', 'API\AWSController@ketinggian');
