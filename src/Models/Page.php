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
 * @property Sidebar $sidebar
 *
 *
 * * * * * Calculable attributes
 *
 * @property string $list_layout
 */
class Page extends SleepingOwlModel implements SluggableInterface{

    use SluggableTrait;

    protected $table = 'hlogeon_scms_pages';

    protected $guarded = [];

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
        return $this->type->listLayout->path;
    }

    public function getLayoutAttribute()
    {
        if($this->type->enable_own_layout && $this->layout_id){
            return $this->layout;
        }
        return $this->type->typeLayout;
    }

    public static function getList()
    {
        return static::lists('title', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function sidebar()
    {
        return $this->belongsTo(Sidebar::class, 'sidebar');
    }


    public function getSidebar()
    {
        if(!$this->type->enable_own_sidebar){
            if($this->type->item_sidebar)
                return Sidebar::find($this->type->item_sidebar)->content;
            return false;
        }
        if($this->sidebar)
            return $this->sidebar->content;

        if($this->type->item_sidebar)
            return Sidebar::find($this->type->item_sidebar)->content;
        return false;
    }

}