
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('calender', function () {
//     return view('calender');
// });


// Authentication routes...
Route::get('/login', 		['as' => 'login', 		'uses' => 'Auth\AuthController@login']);
Route::post('/login', 		['as' => 'login', 		'uses' => 'Auth\AuthController@postLogin']);
Route::get('/logout', 		['as' => 'logout', 		'uses' => 'Auth\AuthController@getLogout']);


// Registration routes...
Route::get('/register', 	['as' => 'register', 	'uses' => 'Auth\AuthController@getRegister']);
Route::post('/register', 	['as' => 'register',	'uses' => 'Auth\AuthController@postRegister']);

// Calender
Route::get('/calender', 	['as' => 'calender', 	'uses' => 'CalanderController@index']);
Route::post('/calender', 	['as' => 'calender', 	'uses' => 'CalanderController@otherMonth']);


//workday
Route::get('/workday/{day}/{month}', 	['as' => 'workday', 	'uses' => 'WorkDayController@index']);


// Employes
Route::get('/employes', 				['as' => '/addpage', 		'uses' => 'EmployesController@add']);
Route::get('/employes', 				['as' => 'employelist', 	'uses' => 'EmployesController@index']);

