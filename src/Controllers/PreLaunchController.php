<?php namespace TecBeast\PreLaunch\Controllers;

use App\Http\Controllers\Controller;
use TecBeast\PreLaunch\Requests\PreLaunchRequest;
use TecBeast\PreLaunch\Models\PotentialClient;
use Config;

class PreLaunchController extends Controller {

	public function getIndex() 
	{
		return view('prelaunch::prelaunch');
	}

	public function putIndex(PreLaunchRequest $request)
	{
		if(Config::get('prelaunch.use_google_recaptcha')) { //if google reCaptcha is enabled
			if(!$this->validateGoogleReCaptcha($request->get('g-recaptcha-response'))) { //validate Google recaptcha
				return redirect()->back()->with('fadeMsg','Google reCaptcha failed, please try again');
			}
		}
		PotentialClient::create($request->all());
		return redirect()->back()->with('fadeMsg','Du wurdest eingetragen.');
	}

	public function getPrivacy()
	{
		return view('prelaunch::privacy');
	}

	public function getImpressum()
	{
		return view('prelaunch::impressum');
	}

	/**
	 * confirms that the email is valid via a user link 
	 */
	public function getEmailConfirmation($token)
	{	
		if(PotentialClient::where('email_confirmation_key',$token)->count() != 1)
			return redirect('prelaunch');

		$client = PotentialClient::where('email_confirmation_key',$token)->first();
		$client->email_confirmation_key = null;
		$client->email_confirmed = true;
		$client->save();
		return redirect('prelaunch')->with('fadeMsg','Deine Email Adresse wurde bestätigt.');
	}

	/**
	 * validate google reCaptcha
	 */
	protected function validateGoogleReCaptcha($token)
	{
		$url = Config::get('prelaunch.google_reCaptcha_verfiy_url');
		$secret = env('GOOGLE_RECAPTACHA_SECRET');
		$data = array('secret' => $secret, 'response' => $token);

		// use key 'http' even if you send the request to https://...
		$options = [
		    'http' => [
		        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        'method'  => 'POST',
		        'content' => http_build_query($data),
		    ],
		];
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);

		return json_decode($result)->success;
	}
}
