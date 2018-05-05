<?php


Route::get('/','HomeController@home')->name('home');

Route::get('/about-me', 'HomeController@about_me')->name('about-me');


Route::get('/contact-me', 'HomeController@contact_me_view')->name('contact-me');

Route::post('contact-me','HomeController@contact_action')->name('form-action');

Route::get('/blog','PostController@index')->name('post-index');


Route::get('/test', function (){
   return view('welcome');
});

//
//Route::get('/user/{id}', function ($id) {
//
//})->where(['id' => '[0-9]']);
//


