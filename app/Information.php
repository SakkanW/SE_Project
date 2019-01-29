<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Information extends Model {

	public $table = 'informations';
	//protected $primaryKey = 'id_info'; // or null
    //public $incrementing = false;
	protected $fillable =[ 
		'firstname',
		'lastname',
		'id_card',
		'sex',
		'status',
		'tel',
		'years',
		'faculty',
		'person_tel',
		'person_name',
		'closefriend_tel',
		'closefriend_name',
		'his_psychiatry'
	];

	public function treatments()
	{
		return $this->hasMany('App\Treatment');
	}

	public function appointments()
	{
		return $this->hasMany('App\Appointment');
	}


}
