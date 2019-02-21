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
Route::post('update_student', 'API\StudentController@update_student');
