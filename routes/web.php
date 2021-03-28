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
    return view('welcome');
});
Route::resource('StudentController ','StudentController');
Route::get('join-table', 'StudentController@index');
Route::get('students_data', 'StudentController@index');
Route::get('techers_data', 'StudentController@index');
Route::get('subs_data', 'StudentController@index');
