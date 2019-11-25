<?php
Route::group(['prefix' => '/category'],function() {

	Route::get('/inputCategory','CategoryController@inputCategory')->name('inputCategory');

	Route::post('/post','CategoryController@addCategory')->name('postCategory');

    Route::get('/showCategory','CategoryController@showCategory')->name('showCategory');

    Route::get('/edit','CategoryController@editCategory')->name('editCategory');

    Route::get('/delete','CategoryController@deleteCategory')->name('deleteCategory');
	
});