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

Route::get('/rijaldi', function(){
    return view('rijaldi');
});
Route::get('/saddam', function(){
    return view('saddam');
});
Route::get('/depi', function(){
    return view('depi');
});
