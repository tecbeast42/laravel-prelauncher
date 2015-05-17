<?php namespace TecBeast\PreLaunch\Middleware;

use Closure;

class AppIsInPrelaunch {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(env('APP_PRELAUNCH',false) AND !\Request::is('prelaunch*')) {
			return redirect()->route('prelaunch');
		}

		return $next($request);
	}

}
