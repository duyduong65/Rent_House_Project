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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('change-password', 'HomeController@ChangePassword')->name('changePassword');
Route::get('editProfile/{id}', 'HomeController@editProfile')->name('editProfile');
Route::post('updateProfile/{id}', 'HomeController@updateProfile')->name('updateProfile');


Route::prefix('houses')->group(function () {
    Route::get('/', 'HouseController@index')->name('houses.index');
    Route::get('create', 'HouseController@create')->name('houses.create');
    Route::post('add', 'HouseController@add')->name('houses.add');
    Route::get('{id}/edit', 'HouseController@edit')->name('houses.edit');
    Route::post('{id}/update', 'HouseController@update')->name('houses.update');
    Route::get('{id}/delete}', 'HouseController@destroy')->name('houses.delete');
    Route::get('search', 'HouseController@search')->name('houses.search');
    Route::get('listHouse', 'HouseController@getAllHouse')->name('houses.list');
});
