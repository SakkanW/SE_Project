<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Information;
use App\Treatment;
use App\Appointment;
use Carbon\Carbon;

use Illuminate\Http\Request;

class DashboardsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function showData()
	{
		//การนัดหมาย
		//$appointments = Appointment::with('informations')->get();
		//$appointments = Appointment::get();
		// $upcoming_dates = ImportantDate::where('date','>', date('Y-m-d'))->orderBy('date')
        //                         ->limit(5)
        //                         ->get();

		// $recent_dates = ImportantDate::where('date','<', date('Y-m-d'))->orderBy('date', 'DESC')
        //                         ->limit(5)
		//                         ->get();
		// $query->where([
		// 	['column_1', '=', 'value_1'],
		// 	['column_2', '<>', 'value_2'],
		// 	[COLUMN, OPERATOR, VALUE],
		// 	...
		// ])
		$today=Carbon::today();
		$today = $today;
		$appointments = Appointment::with('information')->where('date_appointment','>=',date('Y-m-d') )->orderBy('date_appointment')->get();
		$count_persons= Information::count();
		$count_appointments = Appointment::where('date_appointment','>=',date('Y-m-d') )->orderBy('date_appointment')->count();
		
		$count_men=Information::where('sex','=','ชาย')->count();
		$count_women=Information::where('sex','=','หญิง')->count();
		

		$count_eng=Information::where('faculty','=',"คณะวิศวกรรมศาสตร์ศรีราชา")->count();
		$count_sci=Information::where('faculty','=',"คณะวิทยาศาสตร์ศรีราชา")->count();
		$count_scima= Information::where('faculty','=',"คณะวิทยาการจัดการ")->count();
		$count_marin= Information::where('faculty','=',"คณะพาณิชยนาวีนานาชาติ")->count();;
		$count_econ= Information::where('faculty','=',"คณะเศรษฐศาสตร์ศรีราชา")->count();

		$count_Home =Treatment::where('consult_prob','=','Home')->where('type_nisit','=','New')->count();
		$count_Education =Treatment::where('consult_prob','=','Education')->where('type_nisit','=','New')->count();
		$count_Love =Treatment::where('consult_prob','=','Love')->where('type_nisit','=','New')->count();
		$count_Stress =Treatment::where('consult_prob','=','Stress')->where('type_nisit','=','New')->count();
		$count_Drug =Treatment::where('consult_prob','=','Drug')->where('type_nisit','=','New')->count();
		$count_Health =Treatment::where('consult_prob','=','Health')->where('type_nisit','=','New')->count();
		$count_Family =Treatment::where('consult_prob','=','Family')->where('type_nisit','=','New')->count();
		$count_Friend =Treatment::where('consult_prob','=','Friend')->where('type_nisit','=','New')->count();
		$count_Suicide =Treatment::where('consult_prob','=','Suicide')->where('type_nisit','=','New')->count();
		$count_Depress =Treatment::where('consult_prob','=','Depress')->where('type_nisit','=','New')->count();
		$count_Self =Treatment::where('consult_prob','=','Self')->where('type_nisit','=','New')->count();
		$count_Sleep =Treatment::where('consult_prob','=','Sleep')->where('type_nisit','=','New')->count();
		
		$count_gen =Treatment::where('consult_level','=','ปกติ')->count();
		$count_pr =Treatment::where('consult_level','=','มีปัญหา')->count();
		$count_hi =Treatment::where('consult_level','=','รุนแรง')->count();

		$count_stop =Treatment::where('result','=','ยุติ')->count();
		$count_con =Treatment::where('result','=','นัดต่อ')->count();
		//$count_nisit= Information::count();

		//$users = DB::table('users')->where('votes', '>', 100)->get();
		//$informations_all = Information::with('appointments')->get();
		//$treatments=Treatment::get();


		return view('dashboards.dashboard',compact('appointments'))->with('count_persons',$count_persons)->with('count_appointments',$count_appointments)
		->with('count_eng',$count_eng)->with('count_sci',$count_sci)->with('count_scima',$count_scima)
		->with('count_marin',$count_marin)->with('count_econ',$count_econ)->with('count_men',$count_men)
		->with('count_women',$count_women)
		->with('count_Home',$count_Home)
		->with('count_Education',$count_Education)
		->with('count_Love',$count_Love)
		->with('count_Stress',$count_Stress)
		->with('count_Drug',$count_Drug)
		->with('count_Health',$count_Health)
		->with('count_Family',$count_Family)
		->with('count_Friend',$count_Friend)
		->with('count_Suicide',$count_Suicide)
		->with('count_Depress',$count_Depress)
		->with('count_Self',$count_Self)
		->with('count_Sleep',$count_Sleep)

		->with('count_gen',$count_gen)
		->with('count_pr',$count_pr)
		->with('count_hi',$count_hi)

		->with('count_stop',$count_stop)
		->with('count_con',$count_con)

		
		;
		
		

	}


}
