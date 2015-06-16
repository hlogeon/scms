<?php namespace Hlogeon\Scms;

use SleepingOwl\Admin\Exceptions\MethodNotFoundException;
use Illuminate\Config\Repository;
use Illuminate\Routing\Router as IlluminateRouter;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Str;

/**
 * Class Router
 *
 * @package Hlogeon\Scms
 */
class Router
{
    /**
     * @var string
     */
    public $prefix;
    /**
     * @var string
     */
    public $routePrefix;
    /**
     * @var IlluminateRouter
     */
    protected $laravelRouter;

    /**
     * @var array
     */
    public static $modelRoutes = [
        [
            'url'    => '{type}',
            'action' => 'list',
            'method' => 'get'
        ],
        [
            'url'    => '{type}/{id}',
            'action' => 'read',
            'method' => 'get'
        ],
    ];
    /**
     * @var Repository
     */
    private $config;
    /**
     * @var UrlGenerator
     */
    private $urlGenerator;

    /**
     * @param IlluminateRouter $router
     * @param Repository $config
     * @param UrlGenerator $urlGenerator
     * @param string $prefix
     * @param string $routePrefix
     */
    function __construct(IlluminateRouter $router, Repository $config, UrlGenerator $urlGenerator, $prefix,
                         $routePrefix = 'hlogeon-scms')
    {
        $this->laravelRouter = $router;
        $this->config = $config;
        $this->prefix = $prefix;
        $this->routePrefix = $routePrefix;
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * Register all scms routes
     */
    public function registerRoutes()
    {
        $types = Scms::getAllTypes();

        $this->laravelRouter->group([
            'prefix'    => $this->prefix,
            'namespace' => 'Hlogoen\Scms\Controllers',
        ], function () use ($types)
        {
            if (empty($types)) $types = ['__empty_types__'];
            $this->laravelRouter->group([
                'where' => ['type' => implode('|', $types)]
            ], function ()
            {
                foreach (static::$modelRoutes as $route)
                {
                    $url = $route['url'];
                    $action = $route['action'];
                    $method = $route['method'];
                    $controller = isset($route['controller']) ? $route['controller'] : 'SiteController';
                    $this->laravelRouter->$method($url, [
                        'as'   => $this->routePrefix . '.type.' . $action,
                        'uses' => $controller . '@' . $action
                    ]);
                }
            });
        });
    }

    /**
     * @param string $method
     * @param array $parameters
     * @throws MethodNotFoundException
     */
    public function __call($method, $parameters)
    {
        if (preg_match('/^routeTo(?<routeName>[a-zA-Z]+)$/', $method, $matches))
        {
            $route = Str::camel($matches['routeName']);
            while (count($parameters) < 2)
            {
                $parameters[] = [];
            }
            if ( ! is_array($parameters[1]))
            {
                $parameters[1] = [$parameters[1]];
            }
            $routeParameters = $parameters[1];
            array_unshift($routeParameters, $parameters[0]);
            return $this->urlGenerator->route($this->routePrefix . '.table.' . $route, $routeParameters);
        }
        if (method_exists($this->laravelRouter, $method))
        {
            return $this->laravelRouter->group([
                'prefix' => $this->prefix,
//                'before' => $this->getBeforeFilters(),
            ], function () use ($method, $parameters)
            {
                call_user_func_array([
                    $this->laravelRouter,
                    $method
                ], $parameters);
            });
        }
        throw new MethodNotFoundException(get_class($this), $method);
    }


}