<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/16/15
 * Time: 11:26 PM
 */

namespace Hlogeon\Scms\Models;


use Carbon\Carbon;
use SleepingOwl\Models\SleepingOwlModel;

/**
 * Class Type
 * @package Hlogeon\Scms\Models
 *
 * @property int $id
 * @property string $name
 * @property string $alias
 * @property boolean $enable_in_menu
 * @property boolean $enable_own_layout
 * @property Layout $type_layout
 * @property Layout $list_layout
 * @property boolean $type_in_menu
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 */
class Type extends SleepingOwlModel{

    protected $table = 'hlogeon_scms_types';

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

    public function getList()
    {
        return static::lists('name', 'id');
    }

    public function typeLayout()
    {
        return $this->belongsTo('Hlogeon\Scms\Model\Layout', 'type_layout_id');
    }

    public function listLayout()
    {
        return $this->belongsTo('Hlogeon\Scms\Model\Layout', 'list_layout_id');
    }

}