<?php
Route::group(['prefix' => '/products'],function() {

	Route::get('/inputP','ProductController@inputP')->name('inputP');

	Route::post('/post','ProductController@addProduct')->name('postProduct');

	Route::get('/showP','ProductController@showP')->name('showP');

    Route::get('/edit','ProductController@editProduct')->name('editProducts');
    
    Route::post('/editP','ProductController@addProduct')->name('postEditProducts');

    Route::post('/delete','ProductController@deleteProduct')->name('deleteProduct');
	
});