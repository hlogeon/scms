<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/16/15
 * Time: 9:14 PM
 */

namespace Hlogeon\Scms;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class ScmsServiceProvider extends ServiceProvider{


    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/config/scms.php', 'scms');
        $this->publishes([
            __DIR__.'/database/migrations/' => base_path('/database/migrations'),
        ], 'migrations');
        $this->publishes([
            __DIR__.'/database/seeds/' => base_path('/database/seeds'),
        ], 'seeds');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/scms.php', 'scms');
        $this->app->register('Cviebrock\EloquentSluggable\SluggableServiceProvider');
        $this->app->register('SleepingOwl\Admin\AdminServiceProvider');
        $this->app->register('Illuminate\Html\HtmlServiceProvider');
        $loader = AliasLoader::getInstance();
        $loader->alias('SleepingOwl\Admin\Admin', 'Admin');
        $loader->alias('SleepingOwl\AdminAuth\Facades\AdminAuth', 'AdminAuth');
        $loader->alias('SleepingOwl\Admin\Facades\AdminRouter', 'AdminRouter');
        $loader->alias('SleepingOwl\Admin\AssetManager\AssetManager', 'AssetManager');
        $loader->alias('SleepingOwl\Admin\Columns\Column', 'Column');
        $loader->alias('SleepingOwl\Admin\Models\Form\FormItem', 'FormItem');
        $loader->alias('SleepingOwl\Admin\Models\ModelItem', 'ModelItem');
        $loader->alias('Illuminate\Html\FormFacade', 'FormFacade');
        $loader->alias('Illuminate\Html\HtmlFacade', 'HtmlFacade');
        include __DIR__ . '/routes.php';
    }


}