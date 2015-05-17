<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotentialClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('potential_clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->boolean('newsletter')->default(0);
			$table->boolean('email_confirmed')->default(0);
			$table->string('email_confirmation_key',32)->nullable();
			$table->string('reserved_username')->unique()->nullable()->default(null);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('potential_clients');
	}

}
