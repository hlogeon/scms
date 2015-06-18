<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/17/15
 * Time: 12:28 AM
 */

namespace Hlogoen\Scms\Http\Controllers;


use Hlogeon\Scms\Models\Page;
use Hlogeon\Scms\Models\Type;
use Illuminate\Routing\Controller;

class SiteController extends Controller{


    public function listEntries($type)
    {
        $type = $this->getType($type);
        $models = Page::where('type_id', $type->id)->get();
        return \View::make('scms::'.$this->getListLayout($type), compact('models', 'type'));
    }


    public function readEntry($type, $id)
    {
        $model = Page::where('type_id', $type)->where('id', $id)->first();
        return $model;
    }


    protected function getType($type)
    {
        return Type::find($type);
    }


    protected function getListLayout(Type $type)
    {
        return $type->listLayout->path;
    }

}