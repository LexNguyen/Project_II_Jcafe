<?php

Route::group(['prefix' => '/student'], function () {
		Route::get('/view', 'StudentController@viewAdd')->name('viewAdd');

		Route::post('/post', 'StudentController@addStudent')->name('postStudent');

		Route::get('/list', 'StudentController@showAll')->name('showAll');

		Route::get('/group', 'StudentController@showGroup')->name('showGroup');

		Route::post('/delete', 'StudentController@deleteStudent')->name('deleteStudent');
	});

Route::group(['prefix' => '/admin/student'], function () {
		Route::get('/view', 'AdminStudentController@viewAdd')->name('viewAdd');

		Route::post('/post', 'AdminStudentController@addStudent')->name('postStudent');

		Route::get('/search-email', 'AdminStudentController@searchEmail')->name('searching_by_email');

		Route::get('/list', 'AdminStudentController@showAll')->name('showAll');

		Route::post('/delete', 'AdminStudentController@deleteStudent')->name('deleteStudent');
	});

Route::group(['prefix' => '/admin/class'], function () {
		Route::get('/view', 'AdminClassController@viewAdd')->name('class_view_add');

		Route::post('/post', 'AdminClassController@addStudent')->name('class_post_add');

		Route::get('/list', 'AdminClassController@showAll')->name('class_show_all');

		Route::post('/delete', 'AdminClassController@deleteStudent')->name('class_delete');
	});

Route::group(['prefix' => '/admin/group'], function () {
		Route::get('/list', 'AdminGroupController@showAll')->name('group_show_all');
	});