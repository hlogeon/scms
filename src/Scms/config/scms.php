<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/16/15
 * Time: 10:45 PM
 */

return [
    'prefix' => 'site',
    'route_prefix' => 'hlogeon-scms',
    'list' => [
        'route' => 'list',
        'alias' => 'list',
        'controller' => 'Hlogeon\Scms\Http\Controllers\SiteController',
        'action' => 'listEntries'
    ],
    'read' => [
        'route' => 'read',
        'alias' => 'read',
        'controller' => 'Hlogeon\Scms\Http\Controllers\SiteController',
        'action' => 'readEntry'
    ],
];