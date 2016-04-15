<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table)
        {
            $table->increments('id');
			$table->string('name', 100);
			$table->string('email');
			$table->text('description');
			$table->string('image', 250)->nullable();
			$table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('posts');
	}

}
