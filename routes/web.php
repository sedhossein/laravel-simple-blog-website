<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/about-me', function () {
    return view('about-me');
})->name('about-me');


Route::get('/contact-me', function () {
    return view('contact-me');
});


Route::get('admin/add-user', function () {
    return view('contact-me');
});


Route::get('admin/add-app', function () {
    return view('contact-me');
});


Route::get('admin/edit-user', function () {
    return view('contact-me');
});

//
//Route::get('/user/{id}', function ($id) {
//
//})->where(['id' => '[0-9]']);
//


