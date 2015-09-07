<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VisualizationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getVisualization()
	{
		return view('visualization_folder.visualization');

	}

	public function getCarRegistrationsByYearOfProduction()
	{
		return view('visualization_folder.car_registrations_year_of_production');

	}

	public function getCarRegistrationsByMunicipality()
	{
		return view('visualization_folder.car_registrations_municipality');

	}

	public function getCarRegistrationsByCountry()
	{
		return view('visualization_folder.car_registrations_make');

	}
	
	public function getCarRegistrationsByMake()
	{
		return view('visualization_folder.car_registrations_country');

	}
	

}
