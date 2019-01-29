<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TreatmentRequestest extends Request {

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
		return [ 'type_service' => 'required',
		'type_nisit'=> 'required',
		'consult_prob'=> 'required',
		'consult_level'=> 'required',
		'helping'=> 'required',
		'result'=> 'required'

		];
	}

	public function messages(){
		return [
		'type_service.required'=>'กรุณาเลือกประเภทที่มารับบริการห้องให้คำปรึกษา',
		'type_nisit.required'=>'กรุณาเลือกประเภทนิสิตที่มารับการปรึกษา',
		'consult_prob.required'=>'กรุณาเลือกประเภทนิสิตที่มารับการปรึกษา',
		'consult_level.required'=>'กรุณาเลือกระดับปัญหา',
		'helping.required'=>'กรุณาเลือกการช่วยเหลือในการแก้ปัญหา',
		'result.required'=>'กรุณาเลือกผลการปรึกษา'


		];
	}	
}
