<?php
Route::group(['prefix' => '/employee'],function() {

	Route::get('/inputEmployee','EmployeesController@inputEmployee')->name('inputEmployee');

	Route::post('/post','EmployeesController@addEmployee')->name('postEmployee');

	Route::get('/showEmployee','EmployeesController@showEmployee')->name('showEmployee');

    Route::get('/edit','EmployeesController@editEmployee')->name('editEmployee');
    
    Route::get('/delete','EmployeesController@deleteEmployee')->name('deleteEmployee');
	
});