<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/17/15
 * Time: 12:28 AM
 */

namespace Hlogoen\Scms\Http\Controllers;


use Hlogeon\Scms\Models\Type;
use Illuminate\Routing\Controller;

class SiteController extends Controller{


    public function listEntries($type)
    {
        var_dump($type); die();
    }


    public function readEntry($type, $id)
    {
        var_dump([
            $type, $id
        ]);
    }

}