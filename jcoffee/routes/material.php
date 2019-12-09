<?php
Route::group(['prefix' => '/material'],function() {

	Route::get('/input','MaterialController@inputMaterial')->name('inputM');

	Route::post('/post','MaterialController@addMaterial')->name('postMaterial');

    Route::get('/showMaterial','MaterialController@showMaterial')->name('showMaterial');

    Route::get('/delete','MaterialController@deleteMaterial')->name('deleteMaterial');
	
});