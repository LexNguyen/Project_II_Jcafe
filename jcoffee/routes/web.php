<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/postProduct', function () {
//     return view('productInput');
// });

Route::post('/post-student',[
    'as' => 'post-student',
    'uses' => 'AdminStudentController@addStudent'
]);

Route::get('/edit',[
    'as' => 'edit',
    'uses' => 'AdminStudentController@editStudent'
]);

Route::post('/edit-student',[
    'as' => 'edit-student',
    'uses' => 'AdminStudentController@editStuden'
]);

Route::get('/show',[
    'as' => 'showPj',
    'uses' => 'AdminStudentController@showP'
]);

Route::get('/input-student',[
    'as' => 'input-student',
    'uses' => 'AdminStudentController@input'
]);

// Route::get('/showProduct',[
//     'as' =>'showProduct',
//     'uses' => 'StudentController@show'
// ]);

// Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
// });
