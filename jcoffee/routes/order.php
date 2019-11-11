<?php
Route::group(['prefix' => '/order'],function() {

	Route::get('/inputOrder','OrderController@inputOrder')->name('inputO');

	Route::post('/post','OrderController@addOrder')->name('postOrder');

    Route::get('/showOrder','OrderController@showOrder')->name('showOrder');

    Route::get('/edit','OrderController@editOrder')->name('edit');
    
    Route::post('/editOrder','OrderController@edit')->name('post');

    Route::post('/delete','OrderController@deleteOrder')->name('deleteOrder');
	
});