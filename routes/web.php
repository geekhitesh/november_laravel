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

Route::get('/welcome', function() {
	return "Hello World";
});





Route::middleware(['custom_auth'])->group(function () {

	Route::get('/auth1', function() {
		return "Hello World";
	});
	

	Route::get('/new-form', function() {
		return "Hello World";
	});
});

Route::get('/employee/get/{id}','EmployeeController@get');
Route::post('/employee/update','EmployeeController@update');
Route::get('/employee/create','EmployeeController@create');
Route::get('/employee/projects/{id}','EmployeeController@projects');
//Route::get('/employee/delete','');

Route::get('address/show/{id}','AddressController@show');

Route::get('address/show-employee/{id}','AddressController@showEmployee');


Route::get('employee-by-phone/{id}','PhoneController@employee');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('student',function() {
	return view('student.home');
});

Route::get('student/register',function() {
	return view('student.register');
});

Route::post('student/create','StudentController@create');
Route::get('student/get/{id}','StudentController@get');


Route::get('/cache/employee-list','CacheController@getEmpList');

Route::get('/cache/emp-list','CacheController@getCacheData');

Route::get('/guzzle/emplist','GuzzleController@getDataFromApi');