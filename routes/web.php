<?php

use Illuminate\Support\Facades\Route;

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
    return view('books/index');
});

Route::group(['prefix' => 'books', 'namespace' => 'App\Http\Controllers'], function () {
    // Route::resource('', 'bookController');
    Route::get('', 'bookController@index');
    Route::get('/{id}/edit', 'bookController@edit')->name('editBook');
    Route::post('', 'bookController@store')->name('storeBook');
    Route::put('/{id}', 'bookController@update')->name('updateBook');
    Route::delete('/{id}', 'bookController@destroy')->name('deleteBook');
});
