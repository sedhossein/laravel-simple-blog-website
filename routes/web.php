<?php

Route::group(['prefix' => 'blog', 'as' => 'blog.', 'namespace' => 'Blog' ], function () {
    Route::get('/','PostController@index')->name('index');
    Route::get('/create','PostController@create')->name('create');
    Route::post('/store','PostController@store')->name('store');
    Route::get('/edit/{id}','PostController@edit')->name('edit');
    Route::post('/update/{post}','PostController@update')->name('update');
    Route::get('/destroy/{id}','PostController@destroy')->name('destroy');

});

Route::get('/','HomeController@home')->name('home');

Route::get('/about-me', 'HomeController@about_me')->name('about-me');

Route::get('/contact-me', 'HomeController@contact_me_view')->name('contact-me');

Route::post('contact-me','HomeController@contact_action')->name('form-action');



Route::get('/test/{id}', 'TagController@show');









////https://github.com/laracasts/Laravel-5-Generators-Extended#pivot-tables
//public function up()
//{
//    Schema::create('post_tag', function(Blueprint $table)
//    {
//        $table->integer('post_id')->unsigned()->index();
//        $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
//        $table->integer('tag_id')->unsigned()->index();
//        $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
//    });
//}
