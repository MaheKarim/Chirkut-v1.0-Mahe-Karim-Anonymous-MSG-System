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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('viewMSG');



Route::get('/', function () {
     // return view('welcome');
    return redirect ('/viewMSG');
});
Route::get('/about', function () {
     return view('About');
    
});
Route::get('/viewMSG', 'ViewController@viewMSG')->name('');

Route::post('/dataInsert', 'ViewController@datainsert')->name('');

Route::get('/originalView', 'ViewController@originalview')->name('');

Route::get('/delete/{$maheKarim_id}', 'ViewController@delete')->name('');
// 



Route::get('/about', 'AboutController@aboutMahe')->name('');


