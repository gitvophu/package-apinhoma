<?php

Route::get('/hello',function(){
    echo "hello";
});

Route::group(['namespace'=>'Phuvo\Apinhoma\Controllers','prefix'=>'api'],function(){
    Route::get('/users','UserController@index')->name('showalluser');
    Route::post('/users/page','UserController@paging')->name('paging');
    Route::get('/users/search','UserController@search')->name('search');
    Route::get('/users/{id}','UserController@showUser')->name('showauser');
    Route::post('/users/login','UserController@loginUser')->name('loginUser');
    Route::post('/users/logout','UserController@logoutUser')->name('logoutUser');
    Route::post('/users/create','UserController@createUser')->name('createUser');
    Route::put('/users/update/{id}','UserController@updateUser')->name('updateuser');
    Route::put('/users/change-password/{id}','UserController@changeUserPassword')->name('change-password');
    Route::delete('/users/delete/{id}','UserController@deleteUser')->name('deleteuser');
});