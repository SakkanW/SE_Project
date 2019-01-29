<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AppointmentsRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [ 'date_appointment' => 'required',
		'apptime'=> 'required',
		'prob'=> 'required'

		];
	}

	public function messages(){
		return [
		'date_appointment.required'=>'กรุณาระบุวันนัดหมาย',
		'apptime.required'=>'กรุณาเลือกเวลานัดหมาย',
		'prob.required'=>'กรุณาเลือกปัญหาที่เขาพบ'

		];
	}	
}
