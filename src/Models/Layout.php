<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/17/15
 * Time: 5:47 AM
 */

namespace Hlogeon\Scms\Models;


use Carbon\Carbon;
use SleepingOwl\Models\SleepingOwlModel;

/**
 *
 * Class Layout represents layout storage for pages
 * @package Hlogeon\Scms\Models
 *
 * @property integer $id
 * @property string $name
 * @property string $path
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Layout extends SleepingOwlModel{

    protected $table = 'hlogeon_scms_layouts';


    public function getList()
    {
        return static::lists('name', 'id');
    }

}