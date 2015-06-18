<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 8:01 AM
 */

namespace Hlogeon\Scms\Models;


use Carbon\Carbon;
use SleepingOwl\Models\SleepingOwlModel;

/**
 * Class Footer
 * @package Hlogeon\Scms\Models
 *
 * @property integer $id
 * @property string $content
 * @property boolean $active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Footer extends SleepingOwlModel{

    protected $table = 'hlogeon_scms_footers';

}