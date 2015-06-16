<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/16/15
 * Time: 11:26 PM
 */

namespace Hlogeon\Scms\Models;


use SleepingOwl\Models\SleepingOwlModel;

/**
 * Class Type
 * @package Hlogeon\Scms\Models
 *
 * @property int $id
 * @property string $name
 * @property string $alias
 *
 *
 */
class Type extends SleepingOwlModel{



    public static function listAliases()
    {
        $dbList = static::lists('alias', 'id');
        if(empty($dbList)){
            $dbList = [
                'Page',
            ];
        }
        return $dbList;
    }

}