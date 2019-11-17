<?php
Route::group(['prefix' => '/order_detail'],function() {
	//order form
	Route::get('/postProduct', 'Order_detailController@form')->name('post');

	Route::post('/postP', 'Order_detailController@addOrder_detail')->name('postO');
	
	Route::get('/showOrder', 'Order_detailController@show')->name('show');

	Route::get('/editForm', 'Order_detailController@editForm')->name('editO');

	Route::post('/postOrder', 'Order_detailController@addOrder_detail')->name('postOrder_detail');

	Route::get('/deleteOrder','Order_detailController@deleteOrder_detail')->name('deleteOrder_detail');
	
});
