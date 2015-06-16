<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/16/15
 * Time: 9:14 PM
 */

namespace Hlogeon\Scms;

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
        $this->app->bindShared('Hlogeon\Scms\Scms', function ($app)
        {
            return Scms::instance();
        });
        $this->app->singleton('scms', 'Hlogeon\Scms\Scms');
        include 'routes.php';
    }


}