<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 7:54 AM
 */

namespace Hlogeon\Scms\Models;


use Carbon\Carbon;
use SleepingOwl\Models\SleepingOwlModel;

/**
 * Class MenuItem
 * @package Hlogeon\Scms\Models
 *
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property boolean $published
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class MenuItem extends SleepingOwlModel{

    protected $table = 'hlogeon_scms_menu_items';

    protected $guarded = [];

    public static function getList()
    {
        return static::lists('name', 'id');
    }

}