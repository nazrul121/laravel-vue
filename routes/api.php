<?php

use Illuminate\Http\Request;

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



Route::apiResource('/doctors','API\DoctorController');
Route::get('doctors-with-category/{category}','API\DoctorController@doctors_of_category');

Route::get('doctor-chamber-number/{doctor_id}','API\DoctorController@doctor_chamber_number');
Route::get('doctor-chambers-info/{doctor_id}','API\DoctorController@doctor_chambers_info');
Route::get('doctor/{id}','API\DoctorController@single_doctor');


Route::get('doctor_categories','API\DoctorController@doc_types');

Route::get('hospital_categories','API\FrontController@hospital_categories');
Route::get('home_sliders','API\FrontController@home_sliders');

Route::get('divisions','API\AreaController@divisions');
Route::get('districts','API\AreaController@districts');