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
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/password', 'HomeController@change_password')->name('password');
Route::post('/profile', 'HomeController@change_profile')->name('profile');

// --------- ecoenergy.io ---------------------
Route::get('get_energy_lead', 'InfoManageController@get_energy_lead')->name('energy_lead');
Route::get('get_energy_contact', 'InfoManageController@get_energy_contact')->name('energy_contact');
Route::get('energy_lead_detail/{id}', 'InfoManageController@energy_lead_detail')->name('energy_lead_detail')->where('id', '^\d+$');
Route::get('energy_lead_delete/{id}', 'InfoManageController@energy_lead_delete')->name('energy_lead_delete')->where('id', '^\d+$');
