<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($newtable)
		{
			$newtable->increments('uid');
			$newtable->string('firstname');
			$newtable->string('othername');
			$newtable->string('lastname');
			$newtable->string('customer_name');
			$newtable->string('artist_name');
			$newtable->string('vend_name');
			$newtable->string('admin_username');
			$newtable->string('email');
			$newtable->string('password');
			$newtable->string('phone');
			$newtable->string('photo_description');
			$newtable->string('alt_phone');
		    $newtable->string('country');
			$newtable->string('state');
			$newtable->string('city');
			$newtable->string('address');
			$newtable->string('gender');
			$newtable->string('additional_info');
			$newtable->string('account_type');
			$newtable->string('active');
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
		schema::drop('users');
	}

}
