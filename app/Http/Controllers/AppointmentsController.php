<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Appointment;
use App\Information;
use App\AddHolidays;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\AppointmentsRequest;
class AppointmentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$delete_date_expires = Appointment::get();
		$dateHos = AddHolidays::get();
		foreach($delete_date_expires as $delete_date_expire)
		{
			 //dd( Carbon::today());
			 $Datenow = Carbon::today();
			 $Datenow = $Datenow->toDateString();
			if($delete_date_expire->date_appointment < $Datenow)
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
		$informations = Information::find($id);
		//$appoints = Appointment::get();
		$count=0;
		$appoints = Appointment::with('information')->where('date_appointment','>=',date('Y-m-d') )->orderBy('date_appointment')->get();
		return view('appointments.pickup')->with('Information',$informations)->with('appoints',$appoints)->with('count',$count);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id,AppointmentsRequest $request)
	{
		
		
		$app = Information::find($id);
		$appointment = new Appointment;
		$checks_redun = Appointment::get();

		$appointment->informations_id = $request->input('id',$app->id);

		$Dateverify =   $request->input('date_appointment');
		$Dateverify=date('Y-m-d', strtotime($Dateverify));
	
		
		$apptime = $request->input('apptime');
		
		$timeeach = explode("-", $apptime);
		$Datenow =  Carbon::today();
		$Datenow = $Datenow->toDateString();
		//$Dateverify = $Dateverify;
		//$apptime = date('H:i:s', strtotime($apptime));
		$start_timeVer = $timeeach[0];
		//$start_timeVer = time('H:i:s', strtotime($start_timeVer));

		$end_timeVer =  $timeeach[1];
		//$end_timeVer = time('H:i:s', strtotime($end_timeVer));

		$check_date= Appointment::where('date_appointment','=',$Dateverify )
		->where('start_time','=',$start_timeVer )
		->where('end_time','=',$end_timeVer)
		->count();

		$check_holidays = AddHolidays::where('date_holiday','=',$Dateverify )->count();
		
		$count_app = Appointment::where('informations_id','=',$id )->count();
		
		//ตรวจวันที่ผ่านไปแล้ว
		$current_time = Carbon::now()->toTimeString();
		//dd( $current_time);
		//echo "Hello";
		if($Dateverify < $Datenow or $Dateverify == null  )
		{
			
			\Session::flash('flash_message','ไม่สามารถจองวัน/เวลาที่ผ่านไปแล้ว');
                return redirect()->back();
		}
		else
		{
			
			if($start_timeVer < $current_time && $Dateverify < $Datenow)
			{
				\Session::flash('flash_message4','ไม่สามารถจองเวลาที่ผ่านไปแล้ว');
                return redirect()->back();
			}

			if($check_date>0)
			{
				\Session::flash('flash_message1','ช่วงเวลานี้ไม่สะดวก');
                return redirect()->back();
			}
			
			
			if($check_holidays>0)
			{
				\Session::flash('flash_message2','ไม่เปิดทำการ');
					return redirect()->back();
			}

			if($count_app > 0)
			{
				\Session::flash('flash_message3','ได้ทำการจองเวลาไปแล้ว');
					return redirect()->back();
			}
			
			$appointment->date_appointment = $Dateverify;
			//$appointment->date_appointment =$request->input('date_appointment');
			$appointment->start_time = $start_timeVer;
			$appointment->end_time = $end_timeVer;
			$appointment->prob = $request->input('prob');
		}
		

		$appointment->save();
		return redirect()->to('informations/'.$app->id.'/appointments'.'/create');
		//return view('appointments.pickup')->with('check_DateApp',$check_DateApp);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$appoint = Appointment::findOrFail($id);
		$appoint->delete();
		return redirect()->back();
	}

}
