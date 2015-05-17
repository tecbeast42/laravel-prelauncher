<?php namespace TecBeast\PreLaunch\Models;

use Illuminate\Database\Eloquent\Model;

class PotentialClient extends Model {

	protected $fillable = ['email','newsletter','reserved_username','email_confirmation_key'];

}
