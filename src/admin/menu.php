<?php

/*
 * Describe your menu here.
 *
 * There is some simple examples what you can use:
 *
 * 		Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard')->uses('\AdminController@getIndex');
 * 		Admin::menu(User::class)->icon('fa-user');
 * 		Admin::menu()->label('Menu with subitems')->icon('fa-book')->items(function ()
 * 		{
 * 			Admin::menu(\Foo\Bar::class)->icon('fa-sitemap');
 * 			Admin::menu('\Foo\Baz')->label('Overwrite model title');
 * 			Admin::menu()->url('my-page')->label('My custom page')->uses('\MyController@getMyPage');
 * 		});
 */
use \SleepingOwl\Admin\Admin;


Admin::menu()->url('/')
    ->label('Start page')
    ->icon('fa-dashboard')
    ->uses('\SleepingOwl\Admin\Controllers\DummyController@getIndex');

Admin::menu()->label('Menu with subitems')->icon('fa-book')->items(function (){
    Admin::menu('\Hlogeon\Scms\Models\Page')->icon('fa-file');
    Admin::menu('\Hlogeon\Scms\Models\Category')->icon('fa-list-alt');
    Admin::menu('\Hlogeon\Scms\Models\Type')->icon('fa-bars');
    Admin::menu('\Hlogeon\Scms\Models\Layout')->icon('fa-cogs');
    Admin::menu('\Hlogeon\Scms\Models\MenuItem')->icon('fa-th-large');
    Admin::menu('\Hlogeon\Scms\Models\Sidebar')->icon('fa-code');
});
