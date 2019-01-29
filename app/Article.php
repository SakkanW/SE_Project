<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Article extends Model {

	protected $fillable = [
		'title',
		'url',
		'body',
		'published_at',
		'image'
  
	  ];
  
	  protected $date = ['published_at'];
  
	  public function setPublishedAtAttribute($date)
	  {
		$this->attributes['published_at']=Carbon::parse($date)->subDay();
		// code...
	  }

}
