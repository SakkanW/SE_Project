<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Treatment;
use App\Information;
use Illuminate\Http\Request;
use App\Http\Requests\TreatmentRequestest;
//use Request;
class TreatmentsController extends Controller {

	// public function __construct()
	// {
	// 	$this->middleware('auth');

	// 	//จำกัดสิทธิ์การเข้าถึงเฉพาะ Function ที่กำหนด
	// 	//$this->middleware('auth', ['only' =>['create', 'store']]);
		
	// 	//จำกัดสิทธิ์การเข้าถึงทั้งหมด ยกเว้น Function ที่กำหนด
	// 	//$this->middleware('auth', ['except' =>['index', 'show']]);
	// }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$treatments = Treatment::get();
		return view('treatments.index', compact('treatment'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$informations = Information::find($id);
		return view('treatments.create')->with('Information',$informations);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id,TreatmentRequestest $request)
	{
		$treatment = Information::find($id);
		$create = new Treatment;
		$create->informations_id = $request->input('id',$treatment->id);
		$create->type_service = $request->input('type_service');
		$create->type_nisit = $request->input('type_nisit');
		$create->consult_prob = $request->input('consult_prob');
		$create->consult_level = $request->input('consult_level');
		$create->helping = $request->input('helping');
		$create->result = $request->input('result');
		$create->technique = $request->input('technique');
		$create->save();
		return redirect()->to('informations/'.$treatment->id.'/edit');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$treatment = Treatment::find($id);
		if(empty($treatment))
			abort(404);
		return view('treatments.show', compact('treatment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,$id2)
	{
		$treatment = Treatment::find($id2);
		$information = Information::find($id);
		if(empty($treatment))
			abort(404);
		return view('treatments.edit', compact('treatment'),compact('information'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,$id2,TreatmentRequestest $request)
	{
		// $treatment = Treatment::findOrFail($id);
		// $treatment->update($request->all());
		// return redirect('treatments');
		$treatment = Information::find($id);
		$create = Treatment::find($id2);
		$create->informations_id = $request->input('id',$treatment->id);
		$create->type_service = $request->input('type_service');
		$create->type_nisit = $request->input('type_nisit');
		$create->consult_prob = $request->input('consult_prob');
		$create->consult_level = $request->input('consult_level');
		$create->helping = $request->input('helping');
		$create->result = $request->input('result');
		$create->technique = $request->input('technique');
		$create->save();
		return redirect()->to('informations/'.$treatment->id.'/edit');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function destroy($id)
	// {
	// 	$treatment = Treatment::findOrFail($id);
	// 	$treatment->delete();
	// 	return redirect('treatments');
	// }

}
