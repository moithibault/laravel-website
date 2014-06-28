<?php

use Illuminate\Database\Schema\Blueprint;

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

		//On cree 10 entrees pour le test
		for($i = 0; $i < 10; $i++){
			Post::create([
				'content' => "Ut id ante rhoncus felis aliquam condimentum. Nulla a felis rutrum, luctus urna nec, auctor ligula. Ut bibendum in leo quis elementum. Cras consectetur laoreet arcu, sed eleifend urna lobortis vitae. Donec ut dignissim tellus, vel ornare diam. Morbi in metus nibh. Sed nec cursus quam.",
				'slug' => "test-$i"
			]);
		}

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
