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

if(config('app.env') === 'production'){
    // asset()やurl()がhttpsで生成される
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::middleware('verified')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/ski-resort/{id}', 'SkiResortController@index')->name('ski-resort');
    Route::get('/my-page', 'MyPageController@index')->name('my-page');
    Route::get('/record-list', 'RecordController@index')->name('record-list');
    Route::get('/record-create', 'RecordController@create')->name('record-create');
    Route::post('/record-store', 'RecordController@store')->name('record-store');
    Route::get('/record/{id}', 'RecordController@show')->name('record');
    Route::get('/record-edit/{id}', 'RecordController@edit')->name('edit');
    Route::put('/record-update/{id}', 'RecordController@update')->name('update');
    Route::delete('/record-delete/{id}', 'RecordController@destroy')->name('delete');
});