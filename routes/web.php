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

// Route::get('/','commoncontroller@index'); 

Route::get('/gallery1','commoncontroller@galler'); 


Route::get('/','commoncontroller@contact'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');



// Route::resource('/event','eventcontroller');

// Route::resource('/gallery','gallerycontroller');

// Route::post('/search','commoncontroller@search');
// Route::resource('/say','saycontroller');

Route::resource('/team','teamcontroller');

Route::get('/register1','rcontroller@store');

Route::resource('/students','rcontroller');


Route::get('/fazil', function () {
    return view('fazil');
});

Route::get('/noushad', function () {
    return view('noushad');
});