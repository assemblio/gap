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
Route::get('/', function()
{
    return View::make('pages.home');
});

Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});

Route::get('chart1', function()
{
    return View::make('pages.chart1');
});
Route::get('chart2', function()
{
    return View::make('pages.chart2');
});
Route::get('chart3', function()
{
    return View::make('pages.chart3');
});
Route::get('chart4', function()
{
    return View::make('pages.chart4');
});
Route::get('chart5', function()
{
    return View::make('pages.chart1');
});
Route::get('chart6', function()
{
    return View::make('pages.chart1');
});











