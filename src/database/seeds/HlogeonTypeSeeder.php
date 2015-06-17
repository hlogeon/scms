<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/17/15
 * Time: 7:11 AM
 */

use Illuminate\Database\Seeder;
use Hlogeon\Scms\Models\Type;
use Hlogeon\Scms\Models\Layout;


class HlogeonTypeSeeder extends Seeder{


    public function run()
    {
        $type = Type::create([
            'name' => 'test',
            'alias' => 'test',
            'enable_in_menu' => true,
            'enable_own_layout' => false,
            'type_layout_id' => Layout::where('name', 'test')->first()->id,
            'list_layout_id' => Layout::where('name', 'test-list')->first()->id,
            'type_in_menu' => false,
        ]);
        $type->save();
    }

}