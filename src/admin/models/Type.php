<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 5:39 AM
 */
use \SleepingOwl\Admin\Admin;
use \SleepingOwl\Admin\Columns\Column;
use \SleepingOwl\Admin\Models\Form\FormItem;

Admin::model('\Hlogeon\Scms\Models\Type')->title('Типы')->as('page-type')
    ->with('typeLayout', 'listLayout')
    ->columns(function ()
{
    // Describing columns for table view
    Column::string('id', 'ID');
    Column::string('name', 'Название');
    Column::string('alias', 'Алиас');
//    Column::string('alias', 'Алиас');
})->form(function ()
{
    // Describing elements in create and editing forms
    FormItem::text('name', 'Название');
    FormItem::text('alias', 'Алиас');
    FormItem::checkbox('enable_in_menu', 'Разрешить добавлять в меню?');
    FormItem::checkbox('enable_own_layout', 'Разрешить собственный лэйаут для каждой страницы?');
    FormItem::checkbox('enable_own_sidebar', 'Разрешить собственный сайдбар для каждой страницы?');
    FormItem::select('type_layout_id', 'Лэйаут страницы')->list('\Hlogeon\Scms\Models\Layout');
    FormItem::select('list_layout_id', 'Лэйаут списка')->list('\Hlogeon\Scms\Models\Layout');
    FormItem::select('sidebar', 'Сайдбар списка')->list('\Hlogeon\Scms\Models\Sidebar');
    FormItem::select('item_sidebar', 'Сайдбар элемента')->list('\Hlogeon\Scms\Models\Sidebar');
    FormItem::checkbox('type_in_menu', 'Отображать тип в меню?');
});