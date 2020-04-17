<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
    Route::get('logout', 'API\UserController@logout')->name('logout');

    
});

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('v1/employee', 'API\EmployeesController@employee');
    Route::get('v1/employee/{id}', 'API\EmployeesController@employee_byId');
    Route::post('v1/create', 'API\EmployeesController@create');
    Route::put('v1/update/{id}', 'API\EmployeesController@update');
    Route::delete('v1/delete/{id}', 'API\EmployeesController@delete');
});
