<?php

Auth::routes();
Route::get('logout','Auth\LoginController@logout');

Route::group(['middleware'=>'auth'],function (){

    Route::get('/', 'HomeController@index')->name('home');

    /* For titleClearances */
    Route::get('titleClearances/getDataTable','PropertyCaseController@getDataTable');
    Route::resource('titleClearances', 'PropertyCaseController');

    /* For Application */
    Route::get('propertyApplications/getDataTable','PropertyApplicationController@getDataTable');
    Route::resource('propertyApplications', 'PropertyApplicationController');

    /* For Client_Side */
    Route::get('customers/getDataTable','CustomerController@getDataTable');
    Route::resource('customers', 'CustomerController');
});


