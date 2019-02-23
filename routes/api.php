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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('test', function () {
    return response('test',200);
});

Route::post('import_students', 'API\StudentController@import_students');
Route::post('add_student', 'API\StudentController@add_student');
Route::post('delete_student', 'API\StudentController@delete_student');


Route::get('get_student/{registration_no}', 'API\StudentController@get_student');
Route::get('get_all_students', 'API\StudentController@get_all_students');

Route::put('update_student/{registration_no}', 'API\StudentController@update_student');

Route::delete('delete_student/{registration_no}', 'API\StudentController@delete_student');