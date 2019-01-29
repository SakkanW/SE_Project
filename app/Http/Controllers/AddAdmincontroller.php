<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AddAdmincontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$all_users = User::get();
		return view('dashboards.addadmin')->with('all_users',$all_users);
		
	}

	public  function addAdmin($id,Request $request)
	{
		$admin = User::find($id);
		$status = 'admin';
		$admin->status = $request->input('status',$status);
		$admin->save();
		return redirect()->to('/addadmin');
	}

	public function cancleAdmin($id,Request $request)
	{
		$admin = User::find($id);
		$status = 'user';
		$admin->status = $request->input('status',$status);
		$admin->save();
		return redirect()->to('/addadmin');
	}

}
