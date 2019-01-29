<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ConsultController extends Controller {

	public function index()
	{
		$title = 'PHP Prgramming';
		return view('consult.index')
		->withTitle($title);
	}

}
