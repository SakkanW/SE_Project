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

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Route::get('/hello',function(){
// 	return 'Hello Laravel';
// });
// Route::get('welcom/hello','WelcomeController@index');


// // for redirect to facebook auth.
// Route::get('/auth/login/facebook', 'SocialLoginController@facebookAuthRedirect');
// // facebook call back after login success.
// Route::get('/auth/login/facebook/index', 'SocialLoginController@facebookSuccess');

// Route::get('google', function () {

//     return view('googleAuth');

// });

// Route::get('/login/{provider}', 'SocialLoginController@redirectToProvider');

// Route::get('/login/{provider}/callback', 'SocialLoginController@handleProviderCallback');

//Route::resource('informations','InformationsController');


//------------------P'yu Only-----------------------------------
Route::group(['middleware' => ['auth', 'admin']], function () {


//-------------Informations (P'yu)------------------------------------
Route::get('/dashboards', 'DashboardsController@showData');
//--------------------------------------------------------------------


//-------------Informations (P'yu)------------------------------------
Route::get('/informations', 'InformationsController@index');
Route::get('/informations/create', 'InformationsController@create');
Route::post('/informations', 'InformationsController@store');
Route::get('/informations/{id}', 'InformationsController@show');
Route::get('/informations/{id}/edit', 'InformationsController@edit');
Route::PUT('/informations/{id}', 'InformationsController@update');
Route::get('/informations/delete/{id}','InformationsController@destroy');
//-----------------------------------------------------------------------



//---------------------AddAdmin--------------------------------------------
Route::get('/addadmin', 'AddAdminController@index');
Route::get('/addadmin/{id}', 'AddAdminController@addAdmin');
Route::get('/addadmin/cancle/{id}', 'AddAdminController@cancleAdmin');
//--------------------------------------------------------------------------

//---------------------AddHolidays--------------------------------------------
Route::get('/addholidays', 'AddHolidaysController@index');
Route::post('/addholidays', 'AddHolidaysController@addHoliday');
Route::get('/addholidays/cancle/{id}', 'AddHolidaysController@cancleHoliday');
//--------------------------------------------------------------------------



//-------------treatments(P'yu)--------------------------------------------
Route::get('/treatments', 'TreatmentsController@index');
Route::get('/informations/{id}/treatments/create', 'TreatmentsController@create');
Route::post('/informations/{id}/treatments', 'TreatmentsController@store');
Route::get('/informations/{id}/treatments/{id2}/edit', 'TreatmentsController@edit');
Route::PUT('/informations/{id}/treatments/{id2}', 'TreatmentsController@update');
//---------------------------------------------------------------------------

//------------------------appointments(P'yu)------------------------------------------
Route::get('/informations/{id}/appointments/create', 'AppointmentsController@create');
Route::post('/informations/{id}/appointments', 'AppointmentsController@store');
Route::delete('/informations/{id}/appointments', 'AppointmentsController@destroy');
//------------------------------------------------------------------------------------

//------------------------Post News(P'yu)---------------------------------------------
Route::get('/input/create','ArticlesController@create');
Route::post('/input','ArticlesController@index');
Route::get('/show','ArticlesController@show');
Route::get('/input/{id}/edit','ArticlesController@edit');
Route::put('/edit/{id}','ArticlesController@update');
Route::delete('/delete/{id}','ArticlesController@destroy');
//------------------------------------------------------------------------------------

Route::get('/excel_list','ExcelexportController@index');

Route::get('/excel_export/{type}', 'ExcelexportController@exportExcel');
//Route::get('/excel_export_year/{type}', 'ExcelexportController@exportYear');

//Route::get('/Listado.xlsx', 'ExcelexportController@testChart');



 });

//---------------------------------------------------------------------------
Route::group(['middleware' => ['auth', 'user']], function () {

//---------------------------nisit informations--------------------------------------
Route::get('/nisitinfos', 'NisitinfosController@index');
Route::get('/nisitinfos/create', 'NisitinfosController@create');
Route::post('/nisitinfos', 'NisitinfosController@store');
Route::get('/nisitinfos/{id}', 'NisitinfosController@show');
Route::get('/nisitinfos/{id}/edit', 'NisitinfosController@edit');
Route::PUT('/nisitinfos/{id}', 'NisitinfosController@update');

Route::get('/nisitinfos/{id}/appointments/create', 'NisitinfosController@createApp');
Route::post('/nisitinfos/{id}/appointments', 'NisitinfosController@storeApp');
Route::get('/nisitinfos/{id}/appointments/{id2}', 'NisitinfosController@cancleApp');

//------------------------------------------------------------------------------------


 });




//------------------------------------------หน้าแรกนิสิต (not login)---------------------------------
Route::get('/', 'IndexController@index');
Route::get('/news', 'NewsController@showNews');

//---------------------------------------------------------------------------

//Route::delete('/informations/{id}', 'InformationsController@destroy');
//Route::get('informations/{id}/treatments','TreatmentsController@store');
//Route::post('user/{user}/client', 'YourController@store');
//Route::resource('treatments','TreatmentsController');