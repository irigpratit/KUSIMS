<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});

Route::post('test', 'EmployeesController@bulkStoreMarks');
