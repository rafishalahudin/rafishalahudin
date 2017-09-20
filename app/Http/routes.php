<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();
Route::post('/logout', 'Auth\AuthController@logout');
Route::group(['middleware'=>'auth'], function(){


Route::get('/', 'KelasController@index');
Route::get('kelas/add', 'KelasController@create');
Route::post('kelas/add', 'KelasController@store');
Route::delete('kelas/{id}/delete', 'KelasController@destroy');
Route::get('kelas/{id}/edit', 'KelasController@edit');
Route::patch('kelas/{id}/edit', 'KelasController@update');


Route::get('siswa','SiswaController@index');
Route::get('siswa/add', 'SiswaController@create');
Route::post('siswa/add', 'SiswaController@store');
Route::delete('siswa/{nis}/delete', 'SiswaController@destroy');
Route::get('siswa/{nis}/edit', 'SiswaController@edit');
Route::patch('siswa/{nis}/edit', 'SiswaController@update');
});
