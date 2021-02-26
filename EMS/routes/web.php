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
    return view('/employee/index');
});
// department 
Route::get('/department/index','DepartmentController@index')->name('department.index');
Route::get('/department/create','DepartmentController@create')->name('department.create');
Route::post('/department/store','DepartmentController@store')->name('department.store');
Route::get('/department/edit/{id}','DepartmentController@edit')->name('department.edit');
Route::put('/department/update/{id}','DepartmentController@update')->name('department.update');
Route::get('/department/destroy/{id}','DepartmentController@destroy')->name('department.destroy');
Route::get('/department/show/{id}','DepartmentController@show')->name('department.show');

//position
Route::get('/position/index','PositionController@index')->name('position.index');
Route::get('/position/create','PositionController@create')->name('position.create');
Route::post('/position/store','PositionController@store')->name('position.store');
Route::get('/position/edit/{id}','PositionController@edit')->name('position.edit');
Route::put('/position/update/{id}','PositionController@update')->name('position.update');
Route::get('/position/destroy/{id}','PositionController@destroy')->name('position.destroy');
Route::get('/position/show/{id}','PositionController@show')->name('position.show');


//employee
Route::get('/employee/index','EmployeeController@index')->name('employee.index');
Route::get('/employee/create','EmployeeController@create')->name('employee.create');
Route::post('/employee/store','EmployeeController@store')->name('employee.store');
Route::get('/employee/edit/{id}','EmployeeController@edit')->name('employee.edit');
Route::put('/employee/update/{id}','EmployeeController@update')->name('employee.update');
Route::get('/employee/destroy/{id}','EmployeeController@destroy')->name('employee.destroy');
Route::get('/employee/show/{id}','EmployeeController@show')->name('employee.show');

//salary
Route::get('/salary/index','SalaryController@index')->name('salary.index');
Route::get('/salary/create','SalaryController@create')->name('salary.create');
Route::post('/salary/store','SalaryController@store')->name('salary.store');
Route::get('/salary/edit/{id}','SalaryController@edit')->name('salary.edit');
Route::put('/salary/update/{id}','SalaryController@update')->name('salary.update');
Route::get('/salary/destroy/{id}','SalaryController@destroy')->name('salary.destroy');
Route::get('/salary/show/{id}','SalaryController@show')->name('salary.show');

