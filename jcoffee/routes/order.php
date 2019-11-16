<?php
Route::group(['prefix' => '/order'],function() {

	Route::get('/inputOrder','OrderController@inputOrder')->name('inputO');

	Route::post('/post','OrderController@addOrder')->name('postOrder');

    Route::get('/showOrder','OrderController@showOrder')->name('showOrder');

    Route::get('/edit','OrderController@editOrder')->name('editOrder');
    
    Route::post('/editOrder','OrderController@editOrdr')->name('postEditOrder');

    Route::post('/delete','OrderController@deleteOrder')->name('deleteOrder');
	
});