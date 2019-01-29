<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
//use Illuminate\Http\Request;
use App\Information;
class InformationRequest extends Request {

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
	if(Request::get("stat") === 'นิสิต') {
		
		return ['fname' => 'required',
		'lname'=> 'required',
		'idcard'=> 'required|numeric|digits:13|unique:informations,id_card,'.$this->route('id'),
		'sexx'=> 'required',

        'year' => 'required|integer|between:1,8',
        'fac' => 'required',
        'num'=> 'required|numeric|digits_between:9,10',
  		'numemer'=> 'required|numeric|digits_between:9,10',
  		'nameemer'=> 'required',
 		 'numfri'=>'numeric|digits_between:9,10',
 		 'his'=> 'required'
        ];

    }
	
  return [ 'fname' => 'required',
  'lname'=> 'required',
  'idcard'=> 'required|numeric|digits:13|unique:informations,id_card,'.$this->route('id'),
  'sexx'=> 'required',
  'stat'=> 'required',
  'num'=> 'required|numeric|digits_between:9,10',
  'numemer'=> 'required|numeric|digits_between:9,10',
  'nameemer'=> 'required',
  'numfri'=>'numeric|digits_between:9,10',
  'his'=> 'required'
  ];
	

}

public function messages()
{
	// if(Request::get("stat") === 'นิสิต') {

    //     return [
    //         'year.required' => 'นิสิตกรุณาระบุชั้นปี',
    //         'fac.required' => 'นิสิตกรุณาระบุคณะ'
            
    //     ];

    // }
	return [
	'fname.required'=>'กรุณากรอกชื่อ',
	'lname.required'=>'กรุณากรอกนามสกุล',
  
	'idcard.required'=>'กรุณากรอกหมายเลขบัตรประชาชนให้ครบถ้วน',
	'idcard.numeric'=>'กรุณากรอกเป็นหมายเลข',
	'idcard.digits'=>'กรุณากรอกหมายเลข13หลัก',
	'idcard.unique'=>'หมายเลขบัตรประชาชนนี้ได้ถูกใช้งานไปแล้ว',
  
	'sexx.required'=>'กรุณาระบุเพศ',
	'stat.required'=>'กรุณาระบุสถานภาพ',

	'year.required' => 'นิสิตกรุณาระบุชั้นปี',
	'year.integer' => 'นิสิตกรุณาระบุชั้นปีเป็นตัวเลข',
	'year.between' => 'นิสิตกรุณาระบุชั้นปี 1-8',

	'fac.required' => 'นิสิตกรุณาระบุคณะ',

	'num.required'=>'กรุณากรอกหมายเลขโทรศัพท์',
	'num.numeric'=>'กรุณากรอกเป็นหมายเลขโทรศัพท์เท่านั้น',
	'num.digits_between'=>'กรุณากรอกหมายเลข 9หรือ10 หลัก',
	
  
	'numemer.required'=>'กรุณากรอกหมายเลขโทรศัพท์ที่ติดต่อฉุกเฉิน',
	'numemer.numeric'=>'กรุณากรอกเบอร์บุคคลติดต่อฉุกเฉิน:เป็นหมายเลขเท่านั้น',
	'numemer.digits_between'=>'กรุณากรอกเบอร์บุคคลติดต่อฉุกเฉินเป็นหมายเลข 9หรือ10  หลัก',
	
	'numfri.numeric'=>'กรุณากรอกเบอร์เพื่อนสนิทเป็นหมายเลขเท่านั้น',
	'numfri.digits_between'=>'กรุณากรอกเบอร์เพื่อนสนิทเป็นหมายเลข 9หรือ10  หลัก',
  
	
	'nameemer.required'=>'กรุณากรอกชื่อผู้ที่ติดต่อฉุกเฉิน',
	'his.required'=>'กรุณาระบุประวัติการรักษาทางจิตเวช'
  
	];
  }	
}
