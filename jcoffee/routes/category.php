<?php
Route::group(['prefix' => '/category'],function() {

	Route::get('/inputc','CategoryController@inputCategory')->name('inputCategory');

	Route::post('/post','CategoryController@addCategory')->name('postCategory');

    Route::get('/showCategory','CategoryController@showCategory')->name('showCategory');

    Route::post('/delete','CategoryController@deleteCategory')->name('deleteCategory');
	
});