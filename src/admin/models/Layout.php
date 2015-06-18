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

Admin::model('\Hlogeon\Scms\Models\Layout')->title('Лэйауты')->as('page-layout')
    ->columns(function ()
{
    // Describing columns for table view
    Column::string('id', 'ID');
    Column::string('name', 'Название');
    Column::string('path', 'Путь');
//    Column::string('alias', 'Алиас');
})->form(function ()
{
    // Describing elements in create and editing forms
    FormItem::text('name', 'Название');
    FormItem::text('path', 'Путь');

});