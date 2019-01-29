<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model {

	public $timestamps = false;
	public $table = 'appointments';

	protected $fillable =[ 
		'informations_id',
		'date_appointment',
		'start_time',
		'end_time'
	];
	
	public function information()
	{
		return $this->belongsTo( 'App\Information','informations_id');
	}


}
