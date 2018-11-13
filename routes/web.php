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

<<<<<<< HEAD
Route::get('/', 'IndexController@index')->name('index');
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> dd0420af0195b97adba604308357b261d6f5d00c

Route::post('/login', 'LoginController@login')->name('login');
Route::post('/register', 'RegisterController@register')->name('register');

Auth::routes();
//Route::post('register', 'RegisterController@register')->name('register');

Route::get('/home', 'HomeController@index')->name('home');

//from index page
Route::get('/explore', 'IndexController@explore')->name('explore');
Route::get('/profile', 'IndexController@profile')->name('profile');
Route::get('/dm', 'IndexController@dm')->name('dm');
Route::get('/author/{id}', 'IndexController@author')->name('author');
Route::get('/subject/{subject}', 'IndexController@subject')->name('subject');

//from subject page
Route::get('/class/{subject}/{class}', 'SubjectController@class')->name('class');
Route::get('/assessment/{id}', 'SubjectController@assessment')->name('assessment');
<<<<<<< HEAD
Route::get('/index', 'IndexController@index')->name('index');
=======
Route::get('/index', function(){
    return view('welcome'); 
})->name('index');
>>>>>>> dd0420af0195b97adba604308357b261d6f5d00c
