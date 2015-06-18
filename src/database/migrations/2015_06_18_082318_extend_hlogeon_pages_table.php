<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtendHlogeonPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(Schema::hasTable('hlogeon_scms_pages')){
            Schema::table('hlogeon_scms_pages', function(Blueprint $table){
                $table->string('image');
                $table->string('background');
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
        if(Schema::hasTable('hlogeon_scms_pages')){
            Schema::table('hlogeon_scms_pages', function(Blueprint $table){
                $table->dropColumn('image');
                $table->dropColumn('background');
            });
        }
	}

}
