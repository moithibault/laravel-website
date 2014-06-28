<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	//cree la table news
		Schema::create('news', function(Blueprint $table){
			$table->increments('id');
			$table->text('content');
			$table->string('slug');
			$table->timestamps(); //cree les tables created_at, updated_at
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//detruit la table news
		Schema::drop('news');
		
	}

}
