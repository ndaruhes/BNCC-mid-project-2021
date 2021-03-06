<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('books');
});

Route::group(['prefix' => 'books', 'namespace' => 'App\Http\Controllers'], function () {
    // Route::resource('', 'bookController');
    Route::get('', 'bookController@index');
    Route::get('/{id}/edit', 'bookController@edit')->name('editBook');
    Route::post('', 'bookController@store')->name('storeBook');
    Route::put('/{id}', 'bookController@update')->name('updateBook');
    Route::delete('/{id}', 'bookController@destroy')->name('deleteBook');
});
