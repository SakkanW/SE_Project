<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Information;
use App\Treatment;
use Illuminate\Http\Request;
//use Request;

use App\Http\Requests\InformationRequest;

class InformationsController extends Controller {


	// public function __construct()
	// {
	// 	$this->middleware('auth');

	// 	//จำกัดสิทธิ์การเข้าถึงเฉพาะ Function ที่กำหนด
	// 	//$this->middleware('auth', ['only' =>['create', 'store']]);
		
	// 	//จำกัดสิทธิ์การเข้าถึงทั้งหมด ยกเว้น Function ที่กำหนด
	// 	//$this->middleware('auth', ['except' =>['index', 'show']]);
	// }

	public function index()
	{
		$informations = Information::get();
		return view('informations.index', compact('informations'));
	}
	
	public function create()
	{
		return view('informations.create');
	}

	
	public function store(InformationRequest $request)
	{
		// $input =$request->all();
		// Information::create($input);
		
		// return redirect('informations');
		//Information::create($request->all());

		 $create = new Information;
		
		$create->firstname = $request->input('fname');
		$create->lastname = $request->input('lname');
		$create->id_card = $request->input('idcard');
		$create->sex = $request->input('sexx');
		$create->status = $request->input('stat');
		$create->tel = $request->input('num');
		if($create->status == 'บุคคลากร')
		{
			$create->years = '-';
		}
		else
		{
			$create->years = $request->input('year');
		}
		if($create->status == 'บุคคลากร')
		{
			$create->faculty = '-';
		}
		else
		{
			$create->faculty = $request->input('fac');
		}
		$create->person_tel = $request->input('numemer');
		$create->person_name = $request->input('nameemer');
		$create->closefriend_tel = $request->input('numfri');
		$create->closefriend_name = $request->input('namefri');
		$create->his_psychiatry = $request->input('his');
		$create->save();
		return redirect()->to('/informations');
	}

	public function show($id)
	{
		$information = Information::find($id);
		if(empty($information))
			abort(404);
		return view('informations.show', compact('information'));
	}

	public function edit($id)
	{
		$information = Information::find($id);
		$treatments = Treatment::orderBy('created_at', 'DESC')->get();
		$count=0;
		if(empty($information))
			abort(404);
		return view('informations.edit', compact('information'),compact('treatments')) ->with('count',$count);
	}

	public function update($id, InformationRequest $request)
	{
		$create = Information::find($id);
		$create->firstname = $request->input('fname');
		$create->lastname = $request->input('lname');
		$create->id_card = $request->input('idcard');
		$create->sex = $request->input('sexx');
		$create->status = $request->input('stat');
		$create->tel = $request->input('num');
		if($create->status == 'บุคคลากร')
		{
			$create->years = '-';
		}
		else
		{
			$create->years = $request->input('year');
		}
		if($create->status == 'บุคคลากร')
		{
			$create->faculty = '-';
		}
		else
		{
			$create->faculty = $request->input('fac');
		}
		$create->person_tel = $request->input('numemer');
		$create->person_name = $request->input('nameemer');
		$create->closefriend_tel = $request->input('numfri');
		$create->closefriend_name = $request->input('namefri');
		$create->his_psychiatry = $request->input('his');
		$create->save();
		//$information->update($request->all());
		return redirect()->to('/informations');
	}

	public function destroy($id)
	{
		$information = Information::findOrFail($id);
		$information->delete();
		return redirect('informations');
	}

	
}
