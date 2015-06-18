<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/17/15
 * Time: 4:03 AM
 */
Route::group(['prefix' => config('scms.prefix')], function(){

    $listRoute = config('scms.route_prefix') !== '' ? config('scms.route_prefix').'.' : '';
    $listRoute .= config('scms.list.alias');
    Route::get(config('scms.list.route').'/{model}', [
        'uses' => config('scms.list.controller').'@'.config('scms.list.action'),
        'as' => $listRoute
    ]);

    $readRoute = config('scms.route_prefix') !== '' ? config('scms.route_prefix').'.' : '';
    $readRoute .= config('scms.read.alias');
    Route::get(config('scms.read.route').'/{model}/{id}', [
        'uses' => config('scms.read.controller').'@'.config('scms.read.action'),
        'as' => $readRoute
    ]);
});