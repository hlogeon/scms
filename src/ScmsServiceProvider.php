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


    private $aliases = [];

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/config/scms.php', 'scms');
        $loader = AliasLoader::getInstance();
        $this->initAliases();
        foreach($this->aliases as $alias => $class){
            $loader->alias($alias, $class);
        }
        $this->publishes([
            __DIR__.'/database/migrations/' => base_path('/database/migrations'),
        ], 'migrations');
        $this->publishes([
            __DIR__.'/views' => base_path('/resources/views/vendor/hlogeon/scms'),
        ], 'views');
        $this->publishes([
            __DIR__.'/admin' => base_path('/app/admin'),
        ], 'admin');
        $this->publishes([
            __DIR__.'/database/seeds/' => base_path('/database/seeds'),
        ], 'seeds');

        $this->loadViewsFrom(base_path('/resources/views/vendor/hlogeon/scms'), 'scms');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/scms.php', 'scms');
        $this->initAliases();
        $this->app->register('Cviebrock\EloquentSluggable\SluggableServiceProvider');
        $this->app->register('SleepingOwl\Admin\AdminServiceProvider');
        $this->app->register('Illuminate\Html\HtmlServiceProvider');
        foreach($this->aliases as $alias => $class){
            $this->app->bind($alias, function($app){
                return new $app;
            });
        }
        include __DIR__ . '/routes.php';
    }


    public function initAliases()
    {
        $this->aliases = [
            'Admin' => 'SleepingOwl\Admin\Admin',
            'AdminAuth' => 'SleepingOwl\AdminAuth\Facades\AdminAuth',
            'AdminRouter' => 'SleepingOwl\Admin\Facades\AdminRouter',
            'AssetManager' => 'SleepingOwl\Admin\AssetManager\AssetManager',
            'Column' => 'SleepingOwl\Admin\Columns\Column',
            'FormItem' => 'SleepingOwl\Admin\Models\Form\FormItem',
            'ModelItem' => 'SleepingOwl\Admin\Models\ModelItem',
            'Form' => 'Illuminate\Html\FormFacade',
            'Html' => 'Illuminate\Html\HtmlFacade',
        ];
    }

}