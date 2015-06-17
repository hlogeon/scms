<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/17/15
 * Time: 5:58 AM
 */

namespace Hlogeon\Scms\Models;
use Baum\Node;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Category
 * @package Hlogeon1\ContentManagement\Models
 *
 *
 * @property integer $id
 * @property integer $parent_id
 * @property integer $lft
 * @property integer $rgt
 * @property integer $depth
 *
 * @property string $name
 * @property string $slug
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Category extends Node {

    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'hlogeon_scms_categories';


    /**
     * Column name which stores reference to parent's node.
     *
     * @var string
     */
    protected $parentColumn = 'parent_id';

    /**
     * Column name for the left index.
     *
     * @var string
     */
    protected $leftColumn = 'lft';

    /**
     * Column name for the right index.
     *
     * @var string
     */
    protected $rightColumn = 'rgt';

    /**
     * Column name for the depth field.
     *
     * @var string
     */
    protected $depthColumn = 'depth';

    /**
     * Column to perform the default sorting
     *
     * @var string
     */
    protected $orderColumn = null;

    /**
     * With Baum, all NestedSet-related fields are guarded from mass-assignment
     * by default.
     *
     * @var array
     */
    protected $fillable = array('id', 'parent_id', 'lft', 'rgt', 'depth', 'name', 'slug');



    public static function getRoots()
    {
        return self::where('parent_id', null)->get();
    }


    public static function getTree()
    {
        $result = [];
        /** @var Category $root */
        foreach (self::getRoots() as $root) {
            $result[] = $root->treeView();
        }
        return $result;
    }


    public function treeView($childrenArray = null, $root = false)
    {
        if($childrenArray === null)
            $childrenArray = [];
        if($this->children->count() > 0 && count($childrenArray) < count($this->children)){
            foreach($this->children as $child){
//                var_dump($child); die();
                $childrenArray[] = $child->treeView($childrenArray);
//                $this->staticChildElements($this->pages, $childrenArray);
            }
        }
        return [
            'id' => $this->id,
            'text' => $this->name,
            'children' => $childrenArray,
            'a_attr' => [
                'href' => url('admin/categories/'.$this->id.'/edit')
            ],
        ];
    }

    public static function getList()
    {
        return static::lists('name', 'id');
    }

    public function validate()
    {
        return true;
    }


    public function setParentIdAttribute($id)
    {
        if(!$this->exists) $this->save();
        $this->makeChildOf(self::find($id));
    }


}