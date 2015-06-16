<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/17/15
 * Time: 4:03 AM
 */
Route::group(['prefix' => config('scms.prefix')], function(){
    Route::get(config('scms.list.route').'/{model}', [
        'uses' => config('scms.list.controller').'@'.config('scms.list.action'),
        'as' => config('scms.route_prefix').'.'.config('scms.list.alias')
    ]);
    Route::get(config('scms.read.route').'/{model}/{id}', [
        'uses' => config('scms.read.controller').'@'.config('scms.read.action'),
        'as' => config('scms.route_prefix').'.'.config('scms.read.alias')
    ]);
});