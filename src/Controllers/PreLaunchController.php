<?php namespace TecBeast\PreLaunch\Controllers;

use App\Http\Controllers\Controller;
use TecBeast\PreLaunch\Requests\PreLaunchRequest;
use TecBeast\PreLaunch\Models\PotentialClient;

class PreLaunchController extends Controller {

	public function getIndex() 
	{
		return view('prelaunch::prelaunch');
	}

	public function putIndex(PreLaunchRequest $request)
	{
		if(Config::get('use_google_recaptcha')) {
			if(!$this->validateGoogleReCaptcha($request)) {
				return redirect()->back()-with('fadeMsg','Google reCaptcha failed, please try again');
			}
		}
		PotentialClient::create($request->all());
	}

	public function getPrivacy()
	{
		return view('prelaunch::privacy');
	}

	public function getImpressum()
	{
		return view('prelaunch::impressum');
	}

	protected function validateGoogleReCaptcha($request)
	{
		return true;
	}
}
