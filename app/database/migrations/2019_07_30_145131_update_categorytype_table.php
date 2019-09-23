<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCategorytypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		
		Schema::table('categorytype', function(Blueprint $table)
		{
			
			$table->integer('relatea');
			$table->integer('relateb');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	
	{
		//
		
		Schema::table('categorytype', function($table)
		{
		$table->dropcolumn('relatea');
		$table->dropcolumn('relateb');	
			
		});
		
	}


}
