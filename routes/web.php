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

Route::get('/mycrm', 'HomeController@index')->name('home');
Route::get('/password', 'HomeController@change_password')->name('password');
Route::post('/profile', 'HomeController@change_profile')->name('profile');

// --------- ecoenergy.io ---------------------
Route::get('get_energy_lead', 'InfoManageController@get_energy_lead')->name('energy_lead');
Route::get('get_energy_leads_all', 'InfoManageController@get_energy_leads_all')->name('get_energy_leads_all');
Route::get('get_energy_contact', 'InfoManageController@get_energy_contact')->name('energy_contact');
Route::get('energy_lead_detail/{id}', 'InfoManageController@energy_lead_detail')->name('energy_lead_detail')->where('id', '^\d+$');
Route::get('energy_lead_delete/{id}', 'InfoManageController@energy_lead_delete')->name('energy_lead_delete')->where('id', '^\d+$');
Route::get('energy_contact_detail/{id}', 'InfoManageController@energy_contact_detail')->name('energy_contact_detail')->where('id', '^\d+$');
Route::get('energy_contact_delete/{id}', 'InfoManageController@energy_contact_delete')->name('energy_contact_delete')->where('id', '^\d+$');
Route::get('energy_question', 'InfoManageController@energy_question')->name('energy_question');
Route::get('energy_new_question', 'InfoManageController@energy_new_question')->name('energy_new_question');
Route::post('energy_question_add', 'InfoManageController@energy_question_add')->name('energy_question_add');
Route::post('energy_question_update', 'InfoManageController@energy_question_update')->name('energy_question_update');
Route::get('energy_question_edit/{id}', 'InfoManageController@energy_question_edit')->name('energy_question_edit')->where('id', '^\d+$');
Route::get('energy_question_delete/{id}', 'InfoManageController@energy_question_delete')->name('energy_question_delete')->where('id', '^\d+$');
