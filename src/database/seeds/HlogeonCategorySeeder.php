<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/17/15
 * Time: 7:14 AM
 */

use Illuminate\Database\Seeder;
use Hlogeon\Scms\Models\Category;

class HlogeonCategorySeeder extends Seeder{


    public function run()
    {
        $root = Category::create([
            'name' => 'test_root',
            'slug' => 'test_root',
        ]);
        $root->save();
        $child = Category::create([
            'name' => 'test',
            'slug' => 'test'
        ]);
        $child->save();
        $child->makeChildOf($root);
    }

}