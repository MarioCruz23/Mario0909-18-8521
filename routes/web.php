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

Route::get('/', 'criptoController@listar');
Route::get('/form', 'criptoController@criptoform');
Route::get('/form2', 'lenguajeController@lenguajeform');
Route::post('/save', 'criptoController@save')->name('save');
Route::post('/save2', 'lenguajeController@save2')->name('save2');
Route::delete('/delete/{id}','criptoController@delete')->name('delete');
Route::get('/editform/{id}','criptoController@editform')->name('editform');
Route::patch('/edit/{id}','criptoController@edit')->name('edit');
