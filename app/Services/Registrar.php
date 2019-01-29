<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		$message = array(
			'name.required' => 'กรุณากรอกชื่อ',
			'name.max' => 'กรอกชื่อได้ไม่เกิน 255 ตัวอักษร',

			'id_card.required' => 'กรุณากรอกเลขประจำตัวประชาชน',
			'id_card.numeric' => 'กรุณากรอกเลขประจำตัวประชาชนเป็นตัวเลขเท่านั้น',
			'id_card.digits' => 'กรุณากรอกเลขประจำตัวประชาชนเป็นตัวเลข 13 หลัก',
			'id_card.unique' => 'เลขประจำตัวประชาชนนี้ได้ถูกใช้ไปแล้ว',

			'email.required' => 'กรุณากรอกเลขอีเมล',
			'email.email' => 'กรุณากรอกอีเมลให้ถูกต้องตามที่อยู่อีเมล',
			'email.max' => 'กรุณากรอกอีเมลได้สูงสุดไม่เกิน 255 ตัวอักษร',
			'email.unique' => 'ที่อยู่อีเมลนี้ได้ถูกใช้ไปแล้ว',
			
			'password.required' => 'กรุณาใส่รหัสผ่าน',
			'password.confirmed' => 'กรุณายืนยันรหัสผ่าน',
			'password.min' => 'กรุณาใส่รหัสผ่านอย่างน้อย 6 ตัว'
		);

		return Validator::make($data, [
			'name' => 'required|max:255',
			'id_card' => 'required|numeric|digits:13|unique:users,id_card',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		], $message);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'id_card' => $data['id_card'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
