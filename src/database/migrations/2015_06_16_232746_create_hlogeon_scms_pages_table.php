<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHlogeonScmsPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hasTable('hlogeon_scms_pages')){
            Schema::create('hlogeon_scms_pages', function(Blueprint $table){
                $table->increments('id');

                $table->integer('layout_id');
                $table->integer('type_id');
                $table->integer('category_id');

                $table->boolean('published');
                $table->boolean('in_menu');
                $table->boolean('sidebar_in_layout');

                $table->string('title');
                $table->string('slug');
                $table->text('content');
                $table->text('sidebar');

                $table->timestamp('published_at');
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
		Schema::dropIfExists('hlogeon_scms_pages');
	}

}
