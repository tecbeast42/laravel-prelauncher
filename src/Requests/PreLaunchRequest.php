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
			'reserved_username' => 'between:'.Config::get('prelaunch.username_min').','.Config::get('prelaunch.username_max').'|unique:potential_clients',
			'g-recaptcha-response' => 'required',
		];
	}

}
