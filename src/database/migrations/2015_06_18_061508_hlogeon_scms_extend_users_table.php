<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HlogeonScmsExtendUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(Schema::hasTable('users')){
            Schema::table('users', function(Blueprint $table){
                $table->text('info');
                $table->string('profile_image');
            });
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        if(Schema::hasTable('users')){
            Schema::table('users', function(Blueprint $table){
                $table->dropColumn('info');
                $table->dropColumn('profile_image');
            });
        }
	}

}
