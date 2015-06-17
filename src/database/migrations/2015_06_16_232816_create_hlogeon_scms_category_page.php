<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHlogeonScmsCategoryPage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('hlogeon_scms_category_page')){
            Schema::create('hlogeon_scms_category_page', function(Blueprint $table){
                $table->integer('page_id');
                $table->integer('category_id');
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
		Schema::dropIfExists('hlogeon_scms_category_page');
	}

}
