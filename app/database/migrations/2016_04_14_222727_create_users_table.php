<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
        {
            $table->increments('id');
			$table->string('username', 100)->unique();
			$table->string('password');
			$table->string('email', 100)->unique();
			$table->string('image', 250)->nullable();
			$table->rememberToken();
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
		 Schema::drop('users');
	}

}
