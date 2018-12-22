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


Route::get('/employee/get/{id}','EmployeeController@get');
Route::post('/employee/update','EmployeeController@update');
Route::post('/employee/create','EmployeeController@create');
Route::get('/employee/projects/{id}','EmployeeController@projects');
//Route::get('/employee/delete','');

Route::get('address/show/{id}','AddressController@show');

Route::get('address/show-employee/{id}','AddressController@showEmployee');


Route::get('employee-by-phone/{id}','PhoneController@employee');