<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AddHolidays extends Model {

	public $table = 'add_holidays';

	protected $fillable =[ 
		'date_holiday',
		'description'
		
	];

}
