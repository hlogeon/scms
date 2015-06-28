<?php


use \SleepingOwl\Admin\Models\Form\FormItem;

/*
 * Describe you custom columns and form items here.
 *
 * There is some simple examples what you can use:
 *
 *		Column::register('customColumn', '\Foo\Bar\MyCustomColumn');
 *
 * 		FormItem::register('customElement', \Foo\Bar\MyCustomElement::class);
 *
 * 		FormItem::register('otherCustomElement', function (\Eloquent $model)
 * 		{
 *			AssetManager::addStyle(URL::asset('css/style-to-include-on-page-with-this-element.css'));
 *			AssetManager::addScript(URL::asset('js/script-to-include-on-page-with-this-element.js'));
 * 			if ($model->exists)
 * 			{
 * 				return 'My edit code.';
 * 			}
 * 			return 'My custom element code';
 * 		});
 */

FormItem::register('code', function(Eloquent $model){
    $name = '';
    $label = '';
    if($model instanceof \Hlogeon\Scms\Models\Sidebar || $model instanceof \Hlogeon\Scms\Models\Footer){
        $name = 'content';
        $label = 'Контент';
    }
    if($model instanceof \Hlogeon\Scms\Models\Layout){
        $name = 'sidebar';
        $label = 'Сайдбар';
    }
    $editor = new \Hlogoen\Scms\FormItems\CodeEditor($name, $label, $model->content);
    return $editor->render();
});