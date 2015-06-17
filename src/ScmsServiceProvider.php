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
//        $this->publishes([
//            __DIR__.'/src/admin/models' => base_path('/app/admin'),
//        ], 'admin_models');
        $this->publishes([
            __DIR__.'/src/admin' => base_path('/app/admin'),
        ], 'admin');
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
        $loader->alias('Admin', 'SleepingOwl\Admin\Admin');
        $loader->alias('AdminAuth', 'SleepingOwl\AdminAuth\Facades\AdminAuth');
        $loader->alias('AdminRouter', 'SleepingOwl\Admin\Facades\AdminRouter');
        $loader->alias('AssetManager', 'SleepingOwl\Admin\AssetManager\AssetManager');
        $loader->alias('Column', 'SleepingOwl\Admin\Columns\Column');
        $loader->alias('FormItem', 'SleepingOwl\Admin\Models\Form\FormItem');
        $loader->alias('ModelItem', 'SleepingOwl\Admin\Models\ModelItem');
        $loader->alias('FormFacade', 'Illuminate\Html\FormFacade');
        $loader->alias('HtmlFacade', 'Illuminate\Html\HtmlFacade');
        include __DIR__ . '/routes.php';
    }


}