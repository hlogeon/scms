<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/17/15
 * Time: 7:10 AM
 */


use Illuminate\Database\Seeder;
use Hlogeon\Scms\Models\Category;
use Hlogeon\Scms\Models\Type;
use Hlogeon\Scms\Models\Page;

class HlogeonPageSeeder extends Seeder{


    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');
        $category = Category::all()->first();
        $type = Type::all()->first();

        $page = Page::create([
            'in_menu' => false,
            'published' => true,
            'sidebar_in_layout' => false,

            'title' => $faker->word,
            'content' => $faker->paragraphs(),
            'type_id' => $type,
        ]);
        $page->save();
        $page->category()->attach($category);
    }

}