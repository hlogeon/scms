<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HlogroenScmsExtendPageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(Schema::hasTable('hlogeon_scms_pages')){
            Schema::table('hlogeon_scms_pages', function(Blueprint $table){
                $table->string('second_title');
            });
        }
        if(Schema::hasTable('users')){
            Schema::table('users', function(Blueprint $table){
                $table->string('company_info');
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
                $table->dropColumn('second_title');
            });
        }
        if(Schema::hasTable('users')){
            Schema::table('users', function(Blueprint $table){
                $table->dropColumn('company_info');
            });
        }
	}

}
