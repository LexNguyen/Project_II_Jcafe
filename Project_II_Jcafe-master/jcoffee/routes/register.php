<?php

Route::get('/register/view', 'RegisterController@showRegisterPage')->name('register_view');

// Route::get('/register/post', 'RegisterController@register')->name('register_post');

Route::post('/register/post', 'RegisterController@register')->name('register_post');