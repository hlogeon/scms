<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 5:39 AM
 */

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
    FormItem::select('typeLayout.id', 'Лэйаут страницы')->list('\Hlogeon\Scms\Models\Layout');
    FormItem::select('listLayout.id', 'Лэйаут списка')->list('\Hlogeon\Scms\Models\Layout');
    FormItem::checkbox('type_in_menu', 'Отображать тип в меню?');

});