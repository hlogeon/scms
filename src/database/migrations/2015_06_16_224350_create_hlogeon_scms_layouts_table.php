<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHlogeonScmsLayoutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('hlogeon_scms_layouts')){
            Schema::create('hlogeon_scms_layouts', function(Blueprint $table){
                $table->increments('id');

                $table->string('name');
                $table->string('path');
                $table->boolean('has_sidebar');
                $table->text('sidebar');
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
		Schema::dropIfExists('hlogeon_scms_layouts');
	}

}
