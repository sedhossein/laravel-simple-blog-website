<?php


Auth::routes();
// ========================== BLOG =============================
Route::group(['prefix' => 'blog', 'as' => 'blog.', 'namespace' => 'Blog' ], function () {
    // index
    Route::get('/','PostController@index')->name('index');
    // show
    Route::get('/{id}','PostController@show')
        ->name('show')->where('id', '[0-9]+');;
    // create
    Route::get('/create','PostController@create')->name('create');
    Route::post('/store','PostController@store')->name('store');
    // edit
    Route::get('/edit/{id}','PostController@edit')->name('edit');
    Route::post('/update/{post}','PostController@update')->name('update');
    // recourse
    Route::post('/destroy/{id}','PostController@destroy')->name('destroy');

});


// ========================== Tag =============================
Route::group(['prefix' => 'tag', 'as' => 'tag.', 'namespace' => 'Tag' ], function () {
    Route::get('/show/{id}','TagController@show')->name('show');
});


// ========================== Comment =============================
Route::group(['prefix' => 'comment', 'as' => 'comment.', 'namespace' => 'Comment' ], function () {
    Route::post('store/{id}','CommentController@create')->name('create');
});


// ========================== Guest user =============================
Route::get('/','HomeController@home')->name('home');
Route::get('/about-me', 'HomeController@about_me')->name('about-me');
Route::get('/contact-me', 'HomeController@contact_me_view')->name('contact-me');
Route::post('contact-me','HomeController@contact_action')->name('form-action');
