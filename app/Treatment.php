<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model {

	public $table = 'treatments';
	protected $fillable =[ 
		'informations_id',
		'type_service',
		'type_nisit',
		'consult_prob',
		'consult_level',
		'helping',
		'result',
		'technique'
	];
	public function information()
	{
		return $this->belongsTo('App\Information','informations_id');
	}

}
