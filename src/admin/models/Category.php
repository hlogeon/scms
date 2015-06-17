<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 6:31 AM
 */

Admin::model('\Hlogeon\Scms\Models\Category')->title('Категории')->as('page-categories')
    ->with('parent')
    ->columns(function ()
    {
        // Describing columns for table view
        Column::string('id', 'ID');
        Column::string('name', 'Название');
        Column::string('parent.name', 'Родитель');
//    Column::string('alias', 'Алиас');
    })->form(function ()
    {
        // Describing elements in create and editing forms
        FormItem::text('name', 'Название');
        FormItem::text('slug', 'Slug');
        FormItem::select('parent_id', 'Родитель')->list('\Hlogeon\Scms\Models\Category');
    });