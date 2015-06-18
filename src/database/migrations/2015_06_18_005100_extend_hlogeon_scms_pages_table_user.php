<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtendHlogeonScmsPagesTableUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(Schema::hasTable('hlogeon_scms_pages')){
            Schema::table('hlogeon_scms_pages', function(Blueprint $table){
                $table->string('reading_time');
                $table->integer('user_id');
                $table->string('seo_title');
                $table->string('seo_description');
                $table->string('seo_keywords');
                DB::statement('ALTER TABLE hlogeon_scms_pages MODIFY COLUMN sidebar INT(11)');
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
                $table->dropColumn('reading_time');
                $table->dropColumn('user_id');
                $table->dropColumn('seo_title');
                $table->dropColumn('seo_description');
                $table->dropColumn('seo_keywords');
                DB::statement('ALTER TABLE hlogeon_scms_pages MODIFY COLUMN sidebar text');
            });
        }
	}

}
