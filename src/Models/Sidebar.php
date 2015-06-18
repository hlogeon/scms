<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 7:58 AM
 */

namespace Hlogeon\Scms\Models;


use Carbon\Carbon;
use SleepingOwl\Models\SleepingOwlModel;

/**
 * Class Sidebar
 * @package Hlogeon\Scms\Models
 *
 * @property integer $id
 * @property string $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 */
class Sidebar extends SleepingOwlModel{

    protected $table = 'hlogeon_scms_sidebars';

    protected $guarded = [];


    public static function getList()
    {
        return static::lists('id', 'id');
    }

}