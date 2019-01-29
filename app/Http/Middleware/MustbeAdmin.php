<?php namespace App\Http\Middleware;

use Closure;
use App\User;
class MustbeAdmin {

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
			return $next($request);
			//return redirect('/dashboards');
        }

        return redirect()->guest('/');
	}

}
