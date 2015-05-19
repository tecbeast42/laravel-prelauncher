<?php namespace TecBeast\PreLaunch\Requests;

use App\Http\Requests\Request;
use Config;

class PreLaunchRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'email' => 'required|email|unique:potential_clients',
			'reserved_username' => Config::get('prelaunch.username_validation_rules').'|unique:potential_clients',
			'g-recaptcha-response' => 'required',
		];
	}

}
