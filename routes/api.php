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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('energy_lead', 'API\InfoUpdateController@energy_lead');
Route::post('energy_contact', 'API\InfoUpdateController@energy_contact');
Route::get('energy_question_home', 'API\InfoUpdateController@energy_question_home');
Route::get('energy_question_about', 'API\InfoUpdateController@energy_question_about');

Route::post('bienvestir_lead', 'API\InfoUpdateController@bienvestir_lead');
Route::post('bienvestir_contact', 'API\InfoUpdateController@bienvestir_contact');