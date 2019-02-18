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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function (){
        return redirect(route('login'));
    });
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', function(){
        \Auth::logout();
        return redirect(route('login'));
    })->name('logout');
    Route::get('/', function(){
        return redirect(route('companies'));
    });
    Route::get('/companies', 'aboutClientController@index')->name('companies');
    Route::get('/companies/{id}/', 'aboutClientController@viewClient')->where('id', '\d+')->name('company');
    Route::get('/companies/edit/{id}/', 'aboutClientController@editClient')->where('id', '\d+')->name('edit');
    Route::post('/companies/edit/{id}', 'aboutClientController@editRequestClient')->where('id', '\d+');
    Route::get('/companies/delete/{id}/', 'aboutClientController@deleteClient')->where('id', '\d+')->name('delete');
    Route::get('/crm', 'aboutClientController@create')->name('companies.add');
    Route::post('/crm', 'aboutClientController@store');

});

