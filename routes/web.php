<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user
Route::get('/user/add','UserController@add')->name('user.add');
Route::post('/user/add_submit','UserController@store')->name('user.store');
Route::get('/user/view','UserController@view')->name('user.view');
Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
Route::post('/user/update/{id}','UserController@update')->name('user.update');
Route::get('/user/delete/{id}','UserController@delete')->name('user.delete');



//admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Admin'], function () {

    Route::get('/employee/add', 'EmployeeController@add')->name('admin.employee.add');
    Route::post('/employee/store', 'EmployeeController@store')->name('admin.employee.store');
});
