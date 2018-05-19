<?php

//TODO : make imageController(codes are bellow) and another way to validate(with facade)
//TODO : make CommentController and ...


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

Route::group(['prefix' => 'tag', 'as' => 'tag.', 'namespace' => 'Tag' ], function () {
    Route::get('/show/{id}','TagController@show')->name('show');
});

Route::group(['prefix' => 'comment', 'as' => 'comment.', 'namespace' => 'Comment' ], function () {
    Route::post('store/{id}','CommentController@create')->name('create');
});

Route::get('/','HomeController@home')->name('home');
Route::get('/about-me', 'HomeController@about_me')->name('about-me');
Route::get('/contact-me', 'HomeController@contact_me_view')->name('contact-me');
Route::post('contact-me','HomeController@contact_action')->name('form-action');



Route::get('/test/{id}', 'TagController@show');









//$input = $request->only([
//    'description',
//    'title',
//    'body',
//    'file'
//]);
//
//$messages = [
//    'description.max' => 'max of description is 512 charecter !',
//    'description.required' => 'the description is empty !',
//    'body.required' => 'the body is empty !',
//    'file.max' => 'max of file size is 2Mb',
//];
//
//$validator = Validator::make($request->all(), [
//    'title' => 'required|max:36',
//    'description' => 'required|max:512',
//    'body' => 'required',
//    'file' => 'max:5000',
//], $messages);
//
//
//if ($validator->fails()) {
//    return redirect()
//        ->back()
//        ->withInput($request->all())
//        ->withErrors($validator->errors());
//}

