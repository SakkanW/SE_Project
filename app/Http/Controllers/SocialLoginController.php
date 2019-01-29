<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\Nisitusers;
use Input;
use Socialite;
use Auth;
use Redirect;
use Hash;
use Illuminate\Http\Request;

class SocialLoginController extends Controller {

	
	protected $redirectTo = '/nisitinfos';
 
	protected $redirectAfterLogout = '/login/google';



    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
	// public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
	public function __construct()
    {
       $user = Auth::user();
    }
    public function redirectToProvider($provider)
	{
   	 	return Socialite::driver($provider)->redirect();
	}

	public function findOrCreateUser($user,$provider)
	{
		$authUser = Nisitusers::where('provider_id',$user->id)->first();
		if($authUser)
		{
			return $authUser;
		}

		return  Nisitusers::create([
			'name'=>$user->name,
			'email'=>$user->email,
			'provider'=>strtoupper($provider),
			'provider_id'=>$user->id
		]);
	}

	public function handleProviderCallback($provider)
	{
    	$user = Socialite::driver($provider)->stateless()->user();
		$authUser = $this->findOrCreateUser($user,$provider);
		//Auth::login($authUser);
		return redirect($this->redirectTo);
    	//return $user->token;
	}

	

}
