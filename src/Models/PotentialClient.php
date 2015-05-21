<?php namespace TecBeast\PreLaunch\Models;

use Illuminate\Database\Eloquent\Model;

class PotentialClient extends Model {

	protected $fillable = ['email','newsletter','reserved_username','email_confirmation_key'];

	/**
	 * Listen for model Events
	 */
	public static function boot()
	{
		parrent::boot();

		/**
		 * Set email_confirmation_key to a random string
		 */
		static::creating(function($user){
			$user->email_confirmation_key = str_random(40);
		});
	}
}
