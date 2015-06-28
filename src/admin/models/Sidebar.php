<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 11:33 AM
 */

use \SleepingOwl\Admin\Admin;
use \SleepingOwl\Admin\Columns\Column;
use \SleepingOwl\Admin\Models\Form\FormItem;

Admin::model('\Hlogeon\Scms\Models\Sidebar')->title('Сайдбар')->as('sidebar')
    ->columns(function ()
    {
        // Describing columns for table view
        Column::string('id', 'ID');
//    Column::string('alias', 'Алиас');
    })->form(function ()
    {
        // Describing elements in create and editing forms
        FormItem::code('content', 'Контент');

    });