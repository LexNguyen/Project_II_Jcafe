<?php
Route::group(['prefix' => '/order'],function() {

	Route::get('/inputOrder','OrderController@inputOrder')->name('inputO');

	Route::post('/post','OrderController@addOrder')->name('postOrder');

    Route::get('/showOrder','OrderController@showOrder')->name('showOrder');

    Route::get('/delete','OrderController@deleteOrder')->name('deleteOrder');
	
});