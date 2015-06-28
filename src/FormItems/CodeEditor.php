<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/27/15
 * Time: 6:24 AM
 */

namespace Hlogoen\Scms\FormItems;


use SleepingOwl\Admin\AssetManager\AssetManager;
use SleepingOwl\Admin\Models\Form\FormItem\Textarea;

class CodeEditor extends Textarea{


    public function __construct($name = null, $label = null, $id = null)
    {
        parent::__construct($name, $label);
        if($id !== null){
            $this->attributes['id'] = $id;
        }
    }

    public function render()
    {
        AssetManager::addStyle(asset('/css/codemirror.css'));
        AssetManager::addScript(asset('/js/codemirror.js'));
        AssetManager::addScript(asset('/js/mode/css/css.js'));
        AssetManager::addScript(asset('/js/mode/xml/xml.js'));
        AssetManager::addScript(asset('/js/mode/javascript/javascript.js'));
        AssetManager::addScript(asset('/js/mode/htmlmixed/htmlmixed.js'));
        AssetManager::addScript(asset('/js/code-editor.js'));
        if ( ! isset($this->attributes['class']))
        {
            $this->attributes['class'] = '';
        }
        $this->attributes['class'] .= ' code-editor';
        return parent::render();
    }

}