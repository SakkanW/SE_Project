<?php namespace App\Http\Middleware;
use Auth;
use Closure;
use App\Nisitusers;
use Illuminate\Contracts\Auth\Guard;

class NisitTest {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 * 
	 *
	 */
	// public function __construct(Guard $auth)
	// {
	// 	$this->auth = $auth;
	// }

	public function handle($request, Closure $next)
	{
	

		// if (Auth::user()) 
		//{
			 
                return $next($request);
        //}
		//return $next($request);
		//return $next($request);
		//return redirect()->to('/login/google');
	}

}
