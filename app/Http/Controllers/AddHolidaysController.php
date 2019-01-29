<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AddHolidays;
use App\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AddHolidaysController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$count = 0;
		$holidays = AddHolidays::orderBy('date_holiday')->get();
		return view('appointments.holidayadd', compact('holidays'))->with('count',$count);
	}

	public function addHoliday(Request $request)
	{
		$addholidays = new AddHolidays;
		$date_verify = $request->input('date_holiday');
		$date_verify = date('Y-m-d', strtotime($date_verify));
		$addholidays->description = $request->input('description');
		if($date_verify<Carbon::today())
		{
			\Session::flash('flash_message','วันที่ผ่านมาแล้ว');
                return redirect()->back();
		}
		$date_check = AddHolidays::where('date_holiday','=',$date_verify)->count();
		if($date_check>0)
		{
			\Session::flash('flash_message1','วันที่ซ้ำ');
                return redirect()->back();
		}
		$addholidays->date_holiday = $date_verify;
		$addholidays->save();

		$delete_date_expires = Appointment::get();
		$dateHos = AddHolidays::get();
		foreach($delete_date_expires as $delete_date_expire)
		{
			 
			if($delete_date_expire->date_appointment < Carbon::today())
			{
				$delete_date_expire->delete();
			}
			foreach($dateHos as $dateHo)
			{
				if($delete_date_expire->date_appointment == $dateHo->date_holiday)
				{
					$delete_date_expire->delete();
				}
			}

		}

		return redirect('/addholidays');
	}

	public function cancleHoliday($id)
	{
		
		$cancleholidays = AddHolidays::find($id);
		$cancleholidays->delete();
		return redirect()->back();
	}

}
