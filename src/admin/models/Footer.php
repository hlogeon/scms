<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 11:25 AM
 */

Admin::model('\Hlogeon\Scms\Models\Footer')->title('Footer')->as('footer')
    ->columns(function ()
    {
        // Describing columns for table view
        Column::string('id', 'ID');
        Column::string('name', 'Название');
//    Column::string('alias', 'Алиас');
    })->form(function ()
    {
        // Describing elements in create and editing forms
        FormItem::text('name', 'Название');
        FormItem::ckeditor('content', 'Контент');
        FormItem::checkbox('active', 'Активен?');

    });