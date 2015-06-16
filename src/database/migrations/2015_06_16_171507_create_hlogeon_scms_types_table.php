<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHlogeonScmsTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if(!Schema::hasTable('hlogeon_scms_types')){
            Schema::create('hlogeon_scms_types', function(Blueprint $table)
            {
                $table->increments('id');

                $table->string('name');
                $table->string('alias');
                $table->string('type_layout');
                $table->boolean('enable_in_menu');
                $table->boolean('enable_own_layout');
                $table->boolean('type_in_menu');

                $table->timestamps();
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
		Schema::dropIfExists('hlogeon_scms_types');
	}

}
