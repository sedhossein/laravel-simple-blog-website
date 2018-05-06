<?php

Route::get('/','HomeController@home')->name('home');

Route::get('/about-me', 'HomeController@about_me')->name('about-me');


Route::get('/contact-me', 'HomeController@contact_me_view')->name('contact-me');

Route::post('contact-me','HomeController@contact_action')->name('form-action');

Route::get('/blog','PostController@index')->name('post-index');


