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


Route::get('about', array(
	'as' => 'about_page',
	'uses' => 'AboutController@getAbout'));

Route::get('contact', array(
	'as' => 'contact_page',
	'uses' => 'ContactController@getContact'));

Route::get('details', array(
	'as' => 'details_page',
	'uses' => 'DetailsController@getDetails'));

Route::get('/', array(
	'as' => 'index_page',
	'uses' => 'IndexController@getIndex'));


Route::get('services', array(
	'as' => 'services_page',
	'uses' =>'ServicesController@getServices'));


Route::get('visualization', array(
	'as' => 'visualization_page',
	'uses' => 'VisualizationController@getVisualization'));

Route::get('chart1', array(
	'as' => 'visualization_chart_1_page',
	'uses' => 'VisualizationController@getCarRegistrationsByYearOfProduction'));

Route::get('chart2', array(
	'as' => 'visualization_chart_2_page',
	'uses' => 'VisualizationController@getCarRegistrationsByMunicipality'));

Route::get('chart3', array(
	'as' => 'visualization_chart_3_page',
	'uses' => 'VisualizationController@getCarRegistrationsByCountry'));

Route::get('chart4', array(
	'as' => 'visualization_chart_4_page',
	'uses' => 'VisualizationController@getCarRegistrationsByMake'));


