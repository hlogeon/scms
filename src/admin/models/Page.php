<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 6:17 AM
 */


Admin::model('\Hlogeon\Scms\Models\Page')->title('Страницы')->as('page')
    ->with('layout', 'category', 'type')
    ->columns(function ()
    {
        // Describing columns for table view
        Column::string('id', 'ID');
        Column::string('name', 'Название');
        Column::string('slug', 'Slug');
        Column::string('type.name', 'Тип');
        Column::string('category.name', 'Категория');
        Column::string('layout.name', 'Лэйаут');
//    Column::string('alias', 'Алиас');
    })->form(function ()
    {
        // Describing elements in create and editing forms
        FormItem::text('name', 'Название');
        FormItem::text('slug', 'Slug');
        FormItem::select('type.id', 'Тип')->list('\Hlogeon\Scms\Models\Type');
        FormItem::select('category.id', 'Категория')->list('\Hlogeon\Scms\Models\Category');
        FormItem::select('layout.id', 'Лэйаут')->list('\Hlogeon\Scms\Models\Layout');
        FormItem::checkbox('in_menu', 'Отображать в меню?');
        FormItem::checkbox('sidebar_in_layout', 'Сайдбар в шаблоне?');
        FormItem::checkbox('published', 'Опубликованно?');
        FormItem::ckeditor('content', 'Контент');
        FormItem::ckeditor('sidebar', 'Контент сайдбара');

    });