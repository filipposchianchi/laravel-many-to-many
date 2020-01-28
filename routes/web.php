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

Route::get("/employee/{id}/edit","EmployeeController@edit")-> name("employee.edit");
Route::post("/employee/{id}/update","EmployeeController@update")-> name("employee.update");

Route::get("/employee/{id}","EmployeeController@destroy")-> name("employee.destroy");

Route::get("/employee/{id}/show","EmployeeController@show")-> name("employee.show");



