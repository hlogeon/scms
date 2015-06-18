<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtendHlogeonScmsTypesTableSidebar extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(Schema::hasTable('hlogeon_scms_types')){
            Schema::table('hlogeon_scms_types', function(Blueprint $table){
                $table->boolean('type_sidebar');
                $table->boolean('enable_own_sidebar');
                $table->integer('sidebar');
                $table->integer('item_sidebar');
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
        if(Schema::hasTable('hlogeon_scms_types')){
            Schema::table('hlogeon_scms_types', function(Blueprint $table){
                $table->dropColumn('type_sidebar');
                $table->dropColumn('sidebar');
                $table->dropColumn('item_sidebar');
                $table->dropColumn('enable_own_sidebar');
            });
        }
	}

}
