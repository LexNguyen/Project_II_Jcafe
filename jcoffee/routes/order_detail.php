<?php
Route::group(['prefix' => '/order_detail'],function() {
	
	Route::get('/postProduct', 'Order_detailController@form')->name('post');

	Route::post('/postP', 'Order_detailController@addOrder_detail')->name('postO');

	Route::get('/showOrder', 'Order_detailController@show')->name('show');

	Route::get('/editForm', 'Order_detailController@editForm')->name('editO');

	Route::post('/deleteOrder','Order_detailController@deleteOrder_detail')->name('deleteOrder_detail');
	
});
