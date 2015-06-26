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


    public function render()
    {
        AssetManager::addScript(asset('/js/ace.js'));
        AssetManager::addScript(asset('/js/code-editor.js'));
        if ( ! isset($this->attributes['class']))
        {
            $this->attributes['class'] = '';
        }
        $this->attributes['class'] .= ' code-editor';
        return parent::render();
    }

}