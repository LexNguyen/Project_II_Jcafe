<?php
Route::group(['prefix' => '/category'],function() {

	Route::get('/input','CategoryController@inputCategory')->name('inputCategory');

	Route::post('/post','CategoryController@addCategory')->name('postCategory');

    Route::get('/showCategory','CategoryController@showCategory')->name('showCategory');

    Route::get('/delete','CategoryController@deleteCategory')->name('deleteCategory');
	
});