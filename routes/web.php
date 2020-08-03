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
    return view('home');
});



/*route::get('company/index', 'companyController@index')->name('company.index');
route::get('company/create', 'companyController@create')->name('company.create');
route::get('company/{id}/edit', 'companyController@edit')->name('company.edit');
route::get('company/{id}', 'companyController@show')->name('company.show');
route::patch('company/{id}', 'companyController@update')->name('company.update');
route::delete('company/{id}', 'companyController@destroy')->name('company.destroy');

route::post('company/create', 'companyController@store')->name('company.store');

route::get('staff/index', 'staffController@index')->name('staff.index');
route::get('staff/create', 'staffController@create')->name('staff.create');
route::get('staff/{id}/edit', 'staffController@edit')->name('staff.edit');
route::get('staff/{id}', 'staffController@show')->name('staff.show');
route::post('staff/create', 'staffController@store')->name('staff.store');
route::patch('staff/{id}', 'staffController@update')->name('staff.update');
route::delete('staff/{id}', 'staffController@destroy')->name('staff.destroy');*/

route::resource('company', 'companyController')->middleware('auth');
route::resource('staff', 'staffController')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);


