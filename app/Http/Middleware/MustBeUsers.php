<?php namespace App\Http\Middleware;

use Closure;

class MustBeUsers {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (\Auth::user()->status == 'admin')
        {
			//return $next($request);
			return redirect()->to('/auth/logout');
        }

		//return redirect()->guest('/');
		return $next($request);
	}

}
