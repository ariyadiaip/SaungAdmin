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

Route::get('/navbar', function () {
    return view('Admin.NavbarAdmin');
});

Route::get('/dash', function () {
    return view('Pages.Dashboard');
});

Route::get('/user', function () {
    return view('Pages.DataUser');
});

Route::get('/post', function () {
    return view('Pages.DataPosting');
});

Route::get('/riwayat', function () {
    return view('Pages.Riwayat');
});

//test Add Data in Firebase
Route::get('/firebase-post','FirebaseController@postData');

//test Get Data in Firebase
Route::get('/firebase-get', 'FirebaseController@getData');

Route::get('/users', 'DataUserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
