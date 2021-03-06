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

Route::resource('/posts','PostController')->middleware('auth');

if(env('APP_ENV') === 'local') {
    URL::forceScheme('https');
}
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypage','MypageController@index')->middleware('auth');

Route::get('/result','PostController@result')->middleware('auth');

Route::get('/posts', 'ImageController@input');

Route::get('/posts', 'ImageController@upload');

Route::get('/posts', 'ImageController@output');