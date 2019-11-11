<?php
Route::group(['prefix' => '/order_detail'],function() {
	//order form
	Route::get('/postProduct', 'Order_detailController@form')->name('post');

	Route::post('/postP', 'Order_detailController@addOrder_detail')->name('postP');
	
	Route::get('/showProduct', 'Order_detailController@show')->name('show');

	Route::post('/edit','Order_detailController@edit')->name('edit');
	
});
