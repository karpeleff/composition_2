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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/des', 'HomeController@des')->name('des');
Route::post('/des/add_work_time', 'HomeController@add_time')->name('add_time');


//

Route::resource('/document','api\v1\DocumentController');

Route::get('/info',function ()
{
    phpinfo();
});

