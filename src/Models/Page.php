<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/17/15
 * Time: 5:50 AM
 */

namespace Hlogeon\Scms\Models;


use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use SleepingOwl\Models\SleepingOwlModel;

/**
 * Class Page
 * @package Hlogeon\Scms\Models
 *
 * @property integer $id
 *
 * @property integer $layout_id
 * @property Layout $layout
 * @property integer $type_id
 * @property Type $type
 * @property integer $category_id
 * @property Category $category
 *
 * @property boolean $in_menu
 * @property boolean $published
 * @property boolean $sidebar_in_layout
 *
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string $sidebar
 *
 *
 * * * * * Calculable attributes
 *
 * @property string $list_layout
 */
class Page extends SleepingOwlModel implements SluggableInterface{

    use SluggableTrait;

    protected $table = 'hlogeon_scms_pages';

    protected $sluggable = [
        'build_from' => 'title',
        'save_to' => 'slug',
    ];

    public function type()
    {
        return $this->belongsTo('Hlogeon\Scms\Models\Type', 'type_id');
    }

    public function layout()
    {
        return $this->belongsTo('Hlogeon\Scms\Models\Layout', 'layout_id');
    }

    public function category()
    {
        return $this->belongsToMany('Hlogeon\Scms\Models\Category', 'hlogeon_scms_category_page', 'category_id', 'page_id');
    }



    public function getListLayoutAttribute()
    {
        return $this->type->type_list_layout->path;
    }

    public function getLayoutAttribute()
    {
        if($this->type->enable_own_layout && $this->layout_id){
            return $this->layout;
        }
        return $this->type->type_layout;
    }




}