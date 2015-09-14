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
		return view('visualization_folder.1_car_registrations_year_of_production');

	}

	public function getCarRegistrationsByMunicipality()
	{
		return view('visualization_folder.2_car_registrations_municipality');

	}
	
	public function getCarRegistrationsByMake()
	{
		return view('visualization_folder.3_car_registrations_country');

	}
	
	public function getCarRegistrationsByCountry()
	{
		return view('visualization_folder.4_car_registrations_make');

	}

	public function getAverageCustomsBasisByCountry()
	{
		return view('visualization_folder.5_average_customs_basis_by_country');

	}

	public function getUsedCarByCountry()
	{
		return view('visualization_folder.6_used_car_by_country');

	}
}
