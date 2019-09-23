<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
	{
		Schema::create('delivery', function($newtable)
		{
			$newtable->increments('did');
			$newtable->string('state');
			$newtable->string('price');
			$newtable->rememberToken();
			$newtable->timestamps();
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		schema::drop('delivery');
	}

}
