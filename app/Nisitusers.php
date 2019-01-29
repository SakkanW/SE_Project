<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
class Nisitusers extends Model {
	use Authenticatable, CanResetPassword;
	
	protected $table = 'nisitusers';

	protected $fillable = ['name', 'email', 'provider', 'provider_id','password'];
	protected $hidden = ['password', 'remember_token'];

}
