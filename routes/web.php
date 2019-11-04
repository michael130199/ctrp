<?php

Route::get('/', function () { 
    if(Auth::User()== null){
       return view('auth/login');
    }else{
        return view('home');
    }
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');