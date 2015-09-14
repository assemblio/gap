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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('per-ne', array(
	'as' => 'about_page',
	'uses' => 'AboutController@getAbout'));

Route::get('kontakti', array(
	'as' => 'contact_page',
	'uses' => 'ContactController@getContact'));

Route::get('detale', array(
	'as' => 'details_page',
	'uses' => 'DetailsController@getDetails'));

Route::get('/', array(
	'as' => 'index_page',
	'uses' => 'IndexController@getIndex'));

Route::get('kalkulator', array(
	'as' => 'calculator_page',
	'uses' =>'CalculatorController@getServices'));


Route::get('visualization', array(
	'as' => 'visualization_page',
	'uses' => 'VisualizationController@getVisualization'));

Route::get('regjistrimi-i-veturave-ne-baze-te-vitit-te-prodhimit', array(
	'as' => 'visualization_chart_1_page',
	'uses' => 'VisualizationController@getCarRegistrationsByYearOfProduction'));

Route::get('regjistrimi-i-veturave-ne-baze-te-komunave', array(
	'as' => 'visualization_chart_2_page',
	'uses' => 'VisualizationController@getCarRegistrationsByMunicipality'));

Route::get('regjistrimi-i-veturave-ne-baze-te-vendit-te-prodhimit', array(
	'as' => 'visualization_chart_3_page',
	'uses' => 'VisualizationController@getCarRegistrationsByMake'));

Route::get('regjistrimi-i-veturave-ne-baze-te-firmes', array(
	'as' => 'visualization_chart_4_page',
	'uses' => 'VisualizationController@getCarRegistrationsByCountry'));

Route::get('regjistrimi-i-veturave-ne-baze-te-vendit-dhe-llojit-te-motorit', array(
	'as' => 'visualization_chart_5_page',
	'uses' => 'VisualizationController@getAverageCustomsBasisByCountry'));

Route::get('chart6', array(
	'as' => 'visualization_chart_6_page',
	'uses' => 'VisualizationController@getUsedCarByCountry'));


