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

Route::get('/', 'EmployeeController@index') ->name('employee.index');
Route::get('/employee/create', 'EmployeeController@create')-> name('employee.create');
Route::post("/employee/store", "EmployeeController@store")->name ('employee.store');
