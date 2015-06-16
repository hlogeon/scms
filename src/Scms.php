<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/16/15
 * Time: 11:26 PM
 */

namespace Hlogeon\Scms;


use Hlogeon\Scms\Models\Type;
use Illuminate\Config\Repository;
use Illuminate\Routing\Router as IlluminateRouter;
use Illuminate\Routing\UrlGenerator;

class Scms {

    /** @var  Scms */
    public static $instance;

    /** @var  Router */
    public $router;

    public function __construct(Repository $config, IlluminateRouter $router, UrlGenerator $urlGenerator)
    {
        $this->router = new Router($router, $config, $urlGenerator, $config->get('scms.prefix'));
    }


    public static function getAllTypes()
    {
        return Type::listAliases();
    }


    public static function instance()
    {
        if(is_null(static::$instance)){
            static::$instance = app('\Hlogeon\Scms\Scms');
        }
        return static::$instance;
    }

}