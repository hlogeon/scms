<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 1:20 PM
 */
use \SleepingOwl\Admin\Admin;
use \SleepingOwl\Admin\Columns\Column;
use \SleepingOwl\Admin\Models\Form\FormItem;

Admin::model('\App\User')->title('Пользователи')->as('user')
    ->columns(function ()
    {
        // Describing columns for table view
        Column::string('id', 'ID');
        Column::string('name', 'Имя');
        Column::string('email', 'email');
//    Column::string('alias', 'Алиас');
    })->form(function ()
    {
        // Describing elements in create and editing forms
        FormItem::text('name', 'Имя');
        FormItem::text('email', 'Email');
        FormItem::text('company_info', 'Компания и должность');
        FormItem::password('password', 'Пароль');
        FormItem::image('profile_image', 'Аватар');
        FormItem::ckeditor('info', 'Информация');
    });