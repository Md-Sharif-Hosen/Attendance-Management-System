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
Route::get('/user/add', 'UserController@add')->name('user.add');
Route::post('/user/add_submit', 'UserController@store')->name('user.store');
Route::get('/user/view', 'UserController@view')->name('user.view');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');



//admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Admin'], function () {

    Route::get('/dashboard','EmployeeController@dashboard')->name('admin.dashboard');

    //Employee Details
    Route::get('/employee/add', 'EmployeeController@add')->name('admin.employee.add');
    Route::post('/employee/store', 'EmployeeController@store')->name('admin.employee.store');
    Route::get('/employee/view', 'EmployeeController@view')->name('admin.employee.view');
    Route::get('/employee/edit/{id}', 'EmployeeController@edit')->name('admin.employee.edit');
    Route::post('/employee/update/{id}', 'EmployeeController@update')->name('admin.employee.update');
    Route::get('/employee/delete/{id}', 'EmployeeController@delete')->name('admin.employee.delete');
});

//webiste
Route::group(['prefix' => 'website', 'middleware' => ['auth'], 'namespace' => 'website'], function () {

    Route::get('/employee/home', 'EmployeeController@home')->name('website.user.home');
    Route::get('/employee/profile', 'EmployeeController@profile')->name('website.user.profile');

    //attend
    Route::get('/employee/attend', 'AttendanceController@attend')->name('webiste.user.attendance');
});
