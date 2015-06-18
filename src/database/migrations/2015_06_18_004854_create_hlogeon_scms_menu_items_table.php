<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHlogeonScmsMenuItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('hlogeon_scms_menu_items')){
            Schema::create('hlogeon_scms_menu_items', function(Blueprint $table){
                $table->increments('id');

                $table->string('name');
                $table->string('url');
                $table->boolean('published');

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
		Schema::dropIfExists('hlogeon_scms_menu_items');
	}

}
