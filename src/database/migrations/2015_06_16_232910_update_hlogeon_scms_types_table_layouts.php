<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateHlogeonScmsTypesTableLayouts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(Schema::hasTable('hlogeon_scms_types')){
            Schema::table('hlogeon_scms_types', function(Blueprint $table){
                $table->integer('list_layout_id');
                $table->integer('type_layout_id');
                $table->boolean('enable_own_sidebar');
                $table->dropColumn('type_layout');
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
            if(Schema::hasColumns('hlogeon_scms_types', ['list_layout_id', 'enable_own_sidebar'])){
                Schema::table('hlogeon_scms_types', function(Blueprint $table){
                    $table->dropColumn('list_layout_id');
                    $table->dropColumn('type_layout_id');
                    $table->dropColumn('enable_own_sidebar');
                    $table->string('type_layout');
                });
            }
        }
    }

}
