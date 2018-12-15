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


Route::get('/about-us', function () {
    return "Hi this is about us.";
});

Route::get('/my-home', function () {
    return view('home');
});

Route::get('/my-home', function () {
    return "This home page is latest.";
});


//Route::get('/URI','controller@function_name');

/*Route::get('/employee/get','EmployeeController@get');
Route::get('/employee/update','');
Route::get('/employee/create','');
Route::get('/employee/delete','');*/

Route::get('/employee/get/{id}','EmployeeController@get');
Route::get('/employee/all','EmployeeController@all');
//Route::get('/employee/auth/{username}/{password}','EmployeeController@checkAuth');

Route::post('/employee/auth','EmployeeController@checkAuth');

Route::get('/calculate/sum','GetController@sum');

Route::post('/calc/sum','GetController@sum');


Route::get('post/get/{id}','PostController@get');
Route::get('post/all','PostController@all');