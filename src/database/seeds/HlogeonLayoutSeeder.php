<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/17/15
 * Time: 7:13 AM
 */

use Illuminate\Database\Seeder;
use Hlogeon\Scms\Models\Layout;

class HlogeonLayoutSeeder extends Seeder{

    public function run()
    {
        $common = Layout::create([
            'name' => 'test',
            'path' => 'site.test',
        ]);
        $common->save();

        $list = Layout::create([
            'name' => 'test-list',
            'path' => 'site.test-list',
        ]);
        $list->save();
    }

}