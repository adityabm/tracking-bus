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

Route::get('/get-asal', 'API\MapController@asal');
Route::get('/get-tujuan', 'API\MapController@tujuan');
Route::get('/get-rute', 'API\MapController@rute');
