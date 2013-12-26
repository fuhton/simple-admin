<?php namespace Fuhton\SimpleAdmin;

use Illuminate\Support\ServiceProvider;

class SimpleAdminServiceProvider extends ServiceProvider {

/**
 * Indicates if loading of the provider is deferred.
 *
 * @var bool
 */
    protected $defer = false;

/**
 * Bootstrap the application events.
 *
 * @return void
 */
    public function boot()
    {
        $this->package('fuhton/simple-admin');
    }

/**
 * Register the service provider.
 *
 * @return void
 */
    public function register()
    {
        include __DIR__.'/../../../routes.php';
        include __DIR__.'/../../../filters.php';
        $this->app['simple-admin'] = $this->app->share(function($app)
        {
            return new SimpleAdmin;
        });
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('SimpleAdmin', 'Fuhton\SimpleAdmin\Facades\SimpleAdmin');
        });
    }

/**
 * Get the services provided by the provider.
 *
 * @return array
 */
    public function provides()
    {
        return array();
    }

}